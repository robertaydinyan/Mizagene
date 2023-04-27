<?php include('header.php')?>

    <div class="container-fluid firstContainer" style="min-height: 450px">
        <div id="particles-js" style="height: 450px"></div>
        <div class="container row mx-auto m-0 px-0 d-flex" style="padding-top: 155px">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <h1 class="title" style="font-family: 'Nunito Sans', sans-serif;"><span style="color: rgb(210, 58, 225)">Youmee HR</span></h1>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5" style="text-align: start">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Сервис Youmee Tech для HR отделов и кадровых агентств  –'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        <span style="color: rgb(210, 58, 225)"><?= $data['ваша личная система кадровой безопасности'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span><?= $data[', которая позволяет в течение считанных секунд узнать, «Ваш» ли это сотрудник или нет, а также получить инсайт о его возможном профессиональном развитии в вашей компании.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Мы предоставляем исчерпывающую информацию о характере сотрудника, врожденных предрасположенностях его личности, талантах, а также на сколько он соответствует занимаемой должности или новой вакансии.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-5 text-center">
                <img src="/images/hr.png" alt="" width="250">
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="container row mx-auto px-0">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: rgb(210, 58, 225)"><?= $data['Основные задачи, которые стоят перед HR отделами компаний'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: rgba(210, 58, 225, 0.2); border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">1. <?= $data['Карьера и мотивация сотрудников'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span><br>
                    <?= $data['Каждый сотрудник имеет свой потолок возможностей и требует индивидуального подхода, при этом не всегда видение собственного будущего или ожидания сотрудника соотносятся с корпоративной культурой и ценностями самой компании.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start;padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">2. <?= $data['Кадровая безопасность'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span><br>
                    <?= $data['Отток кадров, зависимость важнейших узлов работы компании от отдельно взятых личностей, а также угрозы, связанные с непродуктивностью и/или недобропорядочностью сотрудников.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">3. <?= $data['Кадровый резерв и кадровый балласт'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span><br>
                    <?= $data['Кого назначить начальником отдела и какими неформальными качествами личности руководствоваться при выборе? Кто из сотрудников действительно трудолюбивый, а кто «умело» имитирует работу? В конце концов, как долго конкретный человек проработает в вашей компании и что для того, чтобы его удержать?'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-left: 30px!important; background-color: rgba(210, 58, 225, 0.2); border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">4. <?= $data['Сбалансированная команда'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span><br>
                    <?= $data['Эффективность команды зависит не только от профессионализма сотрудников, но и от сбалансированного уровня межличностной коммуникации между ними. Иногда самый эффективный сотрудник – первый кандидат на увольнение. То же касается и проектных команд, в которых личностная составляющая каждого участника имеет критическое влияние на итоговый результат.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4" style="text-align: start; padding-left: 30px!important; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="font-weight: 500;font-size: 21px; color: #003C46">5. <?= $data['Найм эффективных кадров'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span><br>
                    <?= $data['Каждая вакансия подразумевает перечень критически важных особенностей личности, необходимых для найма на ту или иную должность. И далеко не на все позиции нужен «хороший» в широком понимании слова человек. Каждая должность имеет свое представление идеального характера, и на сколько кандидат соответствует этому представлению, на сколько он «задержится» у Вас и как он поладит с коллективом – вот неочевидные, но важнейшие критерии выбора.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: rgb(210, 58, 225);"><?= $data['Группы параметров для анализа сотрудника/кандидата:'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-between mb-5">
                <ul class="hr-pill nav nav-pills nav-justified mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button style="border-radius: 5px 0px 0px 5px!important" class="nav-link active" id="pills-1" data-bs-toggle="pill" data-bs-target="#pills-tab-1" type="button" role="tab" aria-controls="pills-tab-1" aria-selected="true"><?= $data['Группы автономного анализа'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button style="border-radius: 0px 5px 5px 0px!important" class="nav-link" id="pills-2" data-bs-toggle="pill" data-bs-target="#pills-tab-2" type="button" role="tab" aria-controls="pills-tab-2" aria-selected="true"><?= $data['Группы комбинированного анализа'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </button>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-tab-1" role="tabpanel" aria-labelledby="pills-tab-1" tabindex="0">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Общая характеристика личности'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Интеллект'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Таланты и общая обучаемость'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Психические особенности личности'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Эмоциональность'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Трудолюбие и Ответственность'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Волевые качества личности'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Характеристики «подчиненного»'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Характеристики «руководителя»'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Прогнозируемость поведения в коллективе'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Коммуникабельность'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Особенности коммуникации с руководством, подчиненными и коллегами'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Вероятностное поведение в условиях конфликта'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Вероятностное поведение в условии стресса на работе'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Вероятностное поведение при увольнении'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Базовая лояльность в отношении работодателя'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Рекомендации по повышению лояльности'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Отношение к закону'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Работа и карьера'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Работа и семья'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tab-2" role="tabpanel" aria-labelledby="pills-tab-2" tabindex="1">
                        <div class="container row m-0 p-0">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 m-0 p-0">
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Личность и Руководитель'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Личность и Подчиненный'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Личность и Коллега'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Личность и Должность'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                                <div><i class="fa-solid fa-circle-check me-2" style="color: rgb(210, 58, 225)!important"></i><span><?= $data['Личность и компания'][isset($_GET['lang']) ? 'en' : 'ru']?>
</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <img src="/images/new_report.png" alt="" width="50px" height="50px" style="margin-right: 20px; align-self: center">
                <h1 style="color: rgb(210, 58, 225)"><?= $data['Создание собственных HR репортов'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </h1>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="padding-right: 30px!important; background-color: rgba(210, 58, 225, 0.2); border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Для HR агентств и сотрудников HR отделов мы предоставляем возможность создания неограниченного количества собственных репортов с привязкой к конкретным целям анализа, например приема на определенную должность. В вашем распоряжении более 1500 параметров.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="padding-left: 30px; background-color: white; border-radius: 10px; padding: 15px;">
                <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['При создании Шаблона, Вы можете указать приоритетность параметров анализа, их весовые значения, влияющие на общий рейтинг кандидата, а также настроить параметры-«стопперы», на основании неудовлетворительных значений по которым кандидат будет выбывать из рейтинга (например, кандидат на позицию охранника, чей параметр «храбрость» будет меньше 40%, какие бы другие параметры не были в норме, выбывает из рейтинга).'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-3 mt-3">
                <h3 style="color: rgb(210, 58, 225)"><?= $data['Как создать собственный репорт'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </h3>
            </div>
            <div class="row mx-auto px-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex" style="text-align: start">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="background-color: white; border-radius: 10px; padding: 15px; padding-left: 30px!important">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">1.</span> <?= $data['Создайте собственный шаблон репорта для должности: выберите те параметры, которые вы считаете наиболее важными при найме сотрудника'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">2.</span> <?= $data['Задайте те значения по параметрам, которые для кандидата будут считаться «хорошими» и «проходными». В дальнейшем система будет сопоставлять фактически значения результатов анализа кандидатов с установленными вами.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="background-color: rgba(210, 58, 225, 0.2); border-radius: 10px; padding: 15px; padding-left: 30px!important">
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">3.</span> <?= $data['Через групповую или индивидуальную форму введите данные о субъектах анализа'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">4.</span> <?= $data['Получите рейтинг соответствия кандидатов на должность идеальному портрету сотрудника'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                    <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><span style="color: #003C46;font-weight: 500">5.</span> <?= $data['Фильтруйте по отдельным параметрам, экспортируйте в удобном формате, или редактируйте созданный вами шаблон для получения более релевантного результата'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="container row mx-auto px-0">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                <h1 style="color: rgb(210, 58, 225)"><?= $data['Безопасность храниния данных'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-right: 30px">
                        <h3 style="color: rgb(210, 58, 225)"><?= $data['Только обезличенные данные'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </h3>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['Для обезличенных данных о лице субъекта (координаты контрольных точек и их расстояние относительно друг друга) используется тот же программный код на базе AI, что и при создании визуальных эффектов наложения. Это решение было продиктовано необходимостью быть максимально «прозрачными» в случае использования нашей Технологии с размещением части программного кода на серверах корпоративных пользователей.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                            </p>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-4" style="text-align: start; padding-left: 30px">
                        <h3 style="color: rgb(210, 58, 225)"><?= $data['Варианты поствки ПО'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </h3>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);"><?= $data['В зависимости от размеров компаний, а также целей, которые они преследуют, для корпоративных решений мы предоставляем 2 варианта поставки технологии:'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </p>
                        <p class="mb-0" style="font-size: 19px;color: rgb(114, 114, 114);">1.  <span style="font-weight: 400; color: #003C46">WEB</span>. <?= $data['Через интерфейс системы на нашем сайте. Для этого Вы можете пройти регистрацию и протестировать возможности системы (SAAS)'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </p>
                        <p class="mb-0" style="font-size: 19px;color: rgb(114, 114, 114);">2.  <span style="font-weight: 400; color: #003C46">API</span>. <?= $data['Клиент или Партнер интегрирует нашу систему со своим программным обеспечением и получает результаты скоринга прямо в нем.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </p>
                        <p class="" style="font-size: 19px;color: rgb(114, 114, 114);">3.  <span style="font-weight: 400; color: #003C46">SDK (software development kit)</span>, <?= $data['инсталлируется на сервере Клиента.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                        </p>

                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-5">
                    <img src="/images/picture_total.png" alt="" style="width: 100%">
                </div>
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><?= $data['Готовы сделать первый шаг к сотрудничеству? Заполните форму ниже, выберите формат и в поле «комментарий» напишите суть вашего запроса. Мы оперативно свяжемся с Вами и обсудим все возможные варианты сотрудничества.'][isset($_GET['lang']) ? 'en' : 'ru']?></p>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="container row mx-auto px-0" style="text-align: start; background-color: rgba(210, 58, 225, 0.2); border-radius: 10px; padding: 15px;">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center mb-3">
                <h1 style="color: #003C46"><?= $data['Клиентский отдел2'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </h1>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                <p class="" style="font-size: 16px;color: rgb(114, 114, 114);"><?= $data['Готовы сделать первый шаг к сотрудничеству? Заполните форму ниже, выберите формат и в поле «комментарий» напишите суть вашего запроса. Мы оперативно свяжемся с Вами и обсудим все возможные варианты сотрудничества.'][isset($_GET['lang']) ? 'en' : 'ru']?>
                </p>
            </div>

            <!--            <form method="post" action="/site/become-partners">-->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label"><?= $data['Имя Фамилия*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?= $newStr = substr($data['Имя Фамилия*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label"><?= $data['Должность*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="<?= $newStr = substr($data['Должность*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label"><?= $data['Название компании*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="<?= $newStr = substr($data['Название компании*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label"><?= $data['Сайт компании*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="<?= $newStr = substr($data['Сайт компании*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="text-align: start">
                <div class="mb-3">

                    <label for="exampleFormControlInput5" class="form-label"><?= $data['Продукт Youmee'][isset($_GET['lang']) ? 'en' : 'ru']?>*</label>
                    <select class="form-select" aria-label="Тип сотрудничества*">
                        <option value="1">Youmee KYC</option>
                        <option value="2">Youmee HR</option>
                    </select>
                    <!--                        <label for="exampleFormControlInput5" class="form-label">Тип сотрудничества*</label>-->
                    <!--                        <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Тип сотрудничества">-->
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput6" class="form-label"><?= $data['Страна*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput6" placeholder="<?= $newStr = substr($data['Страна*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput7" class="form-label"><?= $data['Телефон*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <input type="text" class="form-control" id="exampleFormControlInput7" placeholder="<?= $newStr = substr($data['Телефон*'][isset($_GET['lang']) ? 'en' : 'ru'], 0, -1);?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput8" class="form-label"><?= $data['Email address*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <input type="email" class="form-control" id="exampleFormControlInput8" placeholder="name@example.com" required>
                </div>
            </div>


            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3" style="text-align: start">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><?= $data['Комментарий*'][isset($_GET['lang']) ? 'en' : 'ru']?>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
            </div>

            <div class="row col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb-3 d-flex justify-content-center" style="text-align: start; margin-top: auto">
                <div class="mb-3 w-100">
                    <button class="btn fillGreenButton w-100"><?= $data['Отправить'][isset($_GET['lang']) ? 'en' : 'ru']?></button>
                </div>
            </div>
            <!--            </form>-->
        </div>
    </div>

<?php include('footer.php') ?>