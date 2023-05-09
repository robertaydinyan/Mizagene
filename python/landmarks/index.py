import cv2
import mediapipe as mp
import numpy as np
import sys
import json
import math
from paliz.paliz_point import Paliz3DPoint, Paliz2DPoint
from paliz.paliz_pfm import PalizFaceMesh

mp_drawing = mp.solutions.drawing_utils
mp_face_detection = mp.solutions.face_detection
mp_face_mesh = mp.solutions.face_mesh

font = cv2.FONT_HERSHEY_SIMPLEX
font_scale = 0.2
font_thickness = 0
text_color = (255, 255, 255)
color = (167, 2, 223)
result = {
    "result": {
        "landmarks": [],
        "faceHeight": None,
        "faceWidth": None,
        "foreheadHeight": None,
        "yawError": None,
        "pitchError": None,
        "imageWidth": None,
        "imageHeight": None,
        "irisRatio": None,
        "mmpp": None,
        "imageWidth": None,
        "imageHeight": None,
        "mmpp": None
    }
}

# sys.exit()
IMAGE_FILES = sys.argv
IMAGE_FILES.pop(0)
with mp_face_detection.FaceDetection(
    model_selection=0,
    min_detection_confidence=0.5) as face_detection, \
        mp_face_mesh.FaceMesh(
        static_image_mode=True,
        max_num_faces=1,
        refine_landmarks=True,
        min_detection_confidence=0.5,
        min_tracking_confidence=0.5) as face_mesh:

    for idx, file in enumerate(IMAGE_FILES):
        image = cv2.imread(file)
        h, w, _ = image.shape

        # Run face detection on the input image.
        results_detection = face_detection.process(cv2.cvtColor(image, cv2.COLOR_BGR2RGB))
        if results_detection.detections:
            for detection in results_detection.detections:
                bbox = detection.location_data.relative_bounding_box
                image_height, image_width, _ = image.shape
                xmin = int(bbox.xmin * w)
                ymin = int(bbox.ymin * h) - int(0.1 * w)
                xmax = int((bbox.xmin + bbox.width) * w)
                ymax = int((bbox.ymin + bbox.height) * h)

                # Draw rectangle around face.
                cv2.rectangle(image, (xmin, ymin), (xmax, ymax), color, 2)

                # Extract face ROI.
                face_roi = image[ymin:ymax, xmin:xmax]
                result["result"]["imageWidth"] = face_roi.shape[1]
                result["result"]["imageHeight"] = face_roi.shape[0]
                # Run face mesh on the face ROI.
                results_mesh = face_mesh.process(cv2.cvtColor(face_roi, cv2.COLOR_BGR2RGB))

                if not results_mesh.multi_face_landmarks:
                    continue

                for face_landmarks in results_mesh.multi_face_landmarks:

                    dot_spec = mp_drawing.DrawingSpec(color=(0, 255), circle_radius=0, thickness=0)
                    for i, landmark in enumerate(face_landmarks.landmark):
                        x = int(landmark.x * face_roi.shape[1])
                        y = int(landmark.y * face_roi.shape[0])
                        # json
                        result["result"]['landmarks'].append({
                            'x': landmark.x,
                            'y': landmark.y,
                            'z': landmark.z
                        })
                        # Draw landmark dot.
                        cv2.circle(face_roi, (x, y), 2, color, -1)

                        # Draw landmark label.
                        text = str(i)
                        text_size, _ = cv2.getTextSize(text, font, font_scale, font_thickness)
                        text_width, text_height = text_size
                        text_x = x - text_width // 2
                        text_y = y - text_height // 2
                        cv2.putText(face_roi, text, (text_x, text_y + text_height - 5), font, font_scale, text_color, font_thickness, cv2.LINE_AA)

        file = IMAGE_FILES[0].split('.')[0].split('/')[-1].strip()
        cv2.imwrite('../../web/landmarks/' + file + '{}.jpg'.format(idx), image)

pfm1 = PalizFaceMesh()
result_ = pfm1.getFacialLandmarks(IMAGE_FILES[0])
result["result"]["faceHeight"] = result_["faceHeight"]
result["result"]["faceWidth"] = result_["faceWidth"]
result["result"]["foreheadHeight"] = result_["foreheadHeight"]
result["result"]["yawError"] = result_["yawError"]
result["result"]["pitchError"] = result_["pitchError"]
result["result"]["irisRatio"] = result_["mIrisRatio"]
result["result"]["mmpp"] = 0.11505014737087698446921939300186

print('json/' + file + '.json')
with open('json/' + file + '.json', 'w') as f:
    json.dump(result, f)