import sys
import os
os.chdir("/var/www/html/Mizagene/python/landmarks/")
sys.path.append('/home/ec2-user/.local/lib/python3.9/site-packages')
import numpy as np
import cv2
import numpy as np
import mediapipe as mp
import numpy as np
import json
import math
import re

mp_drawing = mp.solutions.drawing_utils
mp_face_detection = mp.solutions.face_detection
mp_face_mesh = mp.solutions.face_mesh

font = cv2.FONT_HERSHEY_SIMPLEX
font_scale = 0.2
font_thickness = 0
text_color = (255, 255, 255)
color = (169, 188, 0)
result = {
    "result": {
        "landmarks": [],
#         "rightEye": {
#             "points": {
#
#             },
#             "center": [
#
#             ],
#             "radius": None
#         },
#         "leftEye": {
#             "points": {
#
#             },
#             "center": [
#
#             ],
#             "radius": None
#         },
#         "faceBound": {
#             "min": {
#
#             },
#             "max": {
#
#             }
#         },
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
                xmin = int(bbox.xmin * w)
                ymin = int(bbox.ymin * h)
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

                # Draw landmarks on the face ROI.
                for face_landmarks in results_mesh.multi_face_landmarks:
                    iris_diameter = abs(face_landmarks.landmark[33].x - face_landmarks.landmark[468].x)
                    result["result"]["irisRatio"] = abs(face_landmarks.landmark[159].y - face_landmarks.landmark[145].y) / iris_diameter

                    coords = [(lm.x, lm.y, lm.z) for lm in face_landmarks.landmark]
                    def compute_distance(a, b):
                        return math.sqrt((a[0]-b[0])**2 + (a[1]-b[1])**2 + (a[2]-b[2])**2)

                    result["result"]["faceHeight"] = compute_distance(coords[10], coords[152])
                    result["result"]["faceWidth"] = compute_distance(coords[234], coords[454])
                    result["result"]["foreheadHeight"] = compute_distance(coords[10], coords[336])
                    result["result"]["yawError"] = math.degrees(math.atan2(coords[33][1] - coords[263][1], coords[33][0] - coords[263][0]))
                    result["result"]["pitchError"] = math.degrees(math.atan2(coords[27][2] - coords[8][2], coords[27][1] - coords[8][1]))
                    result["result"]["mmpp"] = 20.0 / result["result"]["faceWidth"]  # assuming the average human face width is 20 cm

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
                        cv2.circle(face_roi, (x, y), 1, color, -1)

                        # Draw landmark label.
                        text = str(i)
                        text_size, _ = cv2.getTextSize(text, font, font_scale, font_thickness)
                        text_width, text_height = text_size
                        text_x = x - text_width // 2
                        text_y = y - text_height // 2
                        cv2.putText(face_roi, text, (text_x, text_y + text_height - 5), font, font_scale, text_color, font_thickness, cv2.LINE_AA)
        file = re.split('\\ |/', IMAGE_FILES[0])[-1].split('.')[0].strip()
        cv2.imwrite('images/' + file + '{}.png'.format(idx), image)
with open(os.path.abspath('json/' + file + '.json'), 'w') as f:
    json.dump(result, f)