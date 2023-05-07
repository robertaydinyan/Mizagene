<?php
namespace app\commands;

use app\models\API;
use app\models\Mizagene;
use fedemotta\cronjob\models\CronJob;
use Yii;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CronController extends Controller {
    /**
     * Run for a period of time
     * @param string $start
     * @param string $end
     * @return int exit code
     */
    public function actionInit($start, $end) {
        // divide to days
        $dates = CronJob::getDateRange($start, $end);
        $command = CronJob::run($this->id, $this->action->id, 0, CronJob::countDateRange($dates));
        if ($command === false){
            return Controller::EXIT_CODE_ERROR;
        } else{
            foreach ($dates as $date) {
                $mz = new Mizagene();
//                $mz->getItems();
//                $mz->getSectors();
            }
            $command->finish();
            return Controller::EXIT_CODE_NORMAL;
        }
    }
    /**
     * Run for today or for custom dates
     * @return int exit code
     */
    public function actionIndex($start = null, $end = null) {
        return $this->actionInit($start ?: date("Y-m-d", strtotime("-1 days")), $end ?: date("Y-m-d", strtotime("-1 days")));
    }
}