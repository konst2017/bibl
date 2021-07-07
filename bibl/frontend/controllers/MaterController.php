<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Mater;
use frontend\models\Teg;
use frontend\models\Tegid;
use frontend\models\Ssilkiid;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MaterController implements the CRUD actions for Mater model.
 */
class MaterController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Mater models.
     * @return mixed
     */
    public function actionIndex()
    {
        $mater = Yii::$app->request->get('mater');

        $dataProvider = new ActiveDataProvider([
            'query' => Mater::find(),
        ]);
        if (($mater != "")) {
            $dataProvider = new ActiveDataProvider([
                'query' => Mater::find()->where(['naim' => $mater])->orWhere(['awtor' => $mater])->orWhere(['tip' => $mater])->orWhere(['kat' => $mater]),
            ]);
        }
        return $this->render('index', [
            'dataProvider' => $dataProvider, 'mater' => $mater
        ]);
    }


    public function actionDob($id)
    {
        $model = $this->findModel($id);
        $model2 = new Tegid;
        $model3 = new Ssilkiid;
        $dataProvider = new ActiveDataProvider([
            'query' => Tegid::find()->where(['id' => $model->num])
        ]);
        $dataProvider2 = new ActiveDataProvider([
            'query' => Ssilkiid::find()->where(['id' => $model->num])
        ]);
        if ($model2->naim != "") {
            if ($model2->load(Yii::$app->request->post()) && $model2->save()) {
                return $this->redirect(['dob', 'id' => $model->num, 'dataProvider' => $dataProvider, 'dataProvider2' => $dataProvider2, 'model2' => $model2, 'model3' => $model3]);
            }
        }

        if ($model3->load(Yii::$app->request->post()) && $model3->save()) {
            return $this->redirect(['dob', 'id' => $model->num, 'dataProvider' => $dataProvider, 'dataProvider2' => $dataProvider2, 'model2' => $model2, 'model3' => $model3]);
        }


        return $this->render('dob', [
            'model' => $this->findModel($id), 'model2' => $model2, 'model3' => $model3, 'dataProvider' => $dataProvider, 'dataProvider2' => $dataProvider2, 'tegid' => $tegid

        ]);


    }


    /**
     * Displays a single Mater model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model2 = new Tegid;
        $model3 = new Ssilkiid;
        $dataProvider = new ActiveDataProvider([
            'query' => Tegid::find()->where(['id' => $model->num])
        ]);
        $dataProvider2 = new ActiveDataProvider([
            'query' => Ssilkiid::find()->where(['id' => $model->num])
        ]);


        if ($model2->load(Yii::$app->request->post()) && $model2->save()) {
            return $this->redirect(['view', 'id' => $model->num, 'dataProvider' => $dataProvider, 'dataProvider2' => $dataProvider2, 'model2' => $model2, 'model3' => $model3]);
        }
        return $this->render('view', [
            'model' => $this->findModel($id), 'model2' => $model2, 'model3' => $model3, 'dataProvider' => $dataProvider, 'dataProvider2' => $dataProvider2, 'tegid' => $tegid

        ]);
    }

    /**
     * Creates a new Mater model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mater();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->num]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Mater model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->num]);
        }
        if (($model = Mater::findOne($id)) !== null) {
            $model = $this->findModel($id);
            return $this->render('update', [
                'model' => $model,
            ]);

        }
        if (($model3 = Ssilkiid::findOne($id)) !== null) {
            $model3 = $this->findModel3($id);
            return $this->render('update', [
                'model' => $mode3,
            ]);

        }
    }

    /**
     * Deletes an existing Mater model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (($model = Mater::findOne($id)) !== null) {
            $this->findModel($id)->delete();

        }

        if (($model2 = Tegid::findOne($id)) !== null) {
            $this->findModel2($id)->delete();

        }

        if (($model3 = Ssilkiid::findOne($id)) !== null) {
            $this->findModel3($id)->delete();

        }


        return $this->redirect(Yii::$app->request->referrer);
        //}


    }

    /**
     * Finds the Mater model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Mater the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mater::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findModel2($id)
    {
        if (($model2 = Tegid::findOne($id)) !== null) {
            return $model2;
        }

        throw new NotFoundHttpException('The requested2 page does not exist.');
    }

    protected function findModel3($id)
    {
        if (($model3 = Ssilkiid::findOne($id)) !== null) {
            return $model3;
        }

        throw new NotFoundHttpException('The requested2 page does not exist.');
    }

}
