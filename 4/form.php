<!DOCTYPE html>
<html lang="">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <title>4 Задание</title>
    <style>
        .error {
            color: rgba(245, 46, 46, 1);
            border: 1px solid rgba(245, 46, 46, 1);
            box-shadow: 1px 2px 15px rgba(245, 46, 46, 0.5);
        }
    </style>
</head>

<body>
    <?php
    if (!empty($messages)) {
        print('<div id="messages">');
        foreach ($messages as $message) {
            print($message);
        }
        print('</div>');
    }
    ?>

    <div class="form-container">
        <form method="POST" action="">
            <div class="name-block">
                <span class="input-group-text block-title" id="basic-addon1">Имя</span>
                <input type="text" class="form-control" name="name" aria-describedby="basic-addon1" placeholder="Kujo Jotaro" <?php if ($errors['name']) {
                                                                                                                                    print 'class="error"';
                                                                                                                                } ?> value="<?php print $values['name']; ?>" />
            </div>
            <div class="email-block">
                <span class="input-group-text block-title" id="basic-addon2">Email</span>
                <input type="text" class="form-control" name="email" aria-describedby="basic-addon2" placeholder="jojo@mail.ru" <?php if ($errors['email']) {
                                                                                                                                    print 'class="error"';
                                                                                                                                } ?> value="<?php print $values['email']; ?>" />
            </div>
            <div class="birth-block">
                <span class="input-group-text block-title" id="basic-addon3">Дата рождения</span>
                <input type="date" class="form-control" aria-describedby="basic-addon3" placeholder="example@mail.ru" name="date" <?php if ($errors['date']) {
                                                                                                                                        print 'class="error"';
                                                                                                                                    } ?> value="<?php print $values['date']; ?>" />
            </div>
            <div id="gender-block">
                <span class="input-group-text block-title">Пол</span>
                <div class="radios">
                    <div class="male-radio">
                        <input class="form-check-input" type="radio" name="gender" value="m" />
                        <label class="form-check-label" for="male">Мужской</label>
                    </div>
                    <div class="female-radio">
                        <input class="form-check-input" type="radio" name="gender" value="f" />
                        <label class="form-check-label" for="female">Женский</label>
                    </div>
                </div>
            </div>
            <div id="limbs-block">
                <span class="input-group-text block-title">Конечности</span>
                <div class="radios">
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="1" <?php if ($values['limbs'] == '1') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label">1</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="2" <?php if ($values['limbs'] == '2') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label">2</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="3" <?php if ($values['limbs'] == '3') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label">3</label>
                    </div>
                    <div class="limbs-radio">
                        <input class="form-check-input" type="radio" name="limbs" value="4" <?php if ($values['limbs'] == '4') {
                                                                                                print 'checked';
                                                                                            }; ?> />
                        <label class="form-check-label">Все</label>
                    </div>
                </div>
            </div>
            <div class="superpowers-block">
                <div class="block-title">Суперспособности</div>
                <select class="form-select form-select-lg mb-2" name="select[]" multiple <?php if ($errors['select']) {
                                                                                                print 'class="error"';
                                                                                            } ?>>
                    <option value="inf" <?php $a = explode(',', $values['select']);
                                        foreach ($a as $key) {
                                            if ($key == 'inf') {
                                                print 'selected';
                                            }
                                        } ?>>Бессмертие</option>
                    <option value="through" <?php $a = explode(',', $values['select']);
                                            foreach ($a as $key) {
                                                if ($key == 'through') {
                                                    print 'selected';
                                                }
                                            } ?>>Прохождение сквозь стены</option>
                    <option value="levitation" <?php $a = explode(',', $values['select']);
                                                foreach ($a as $key) {
                                                    if ($key == 'levitation') {
                                                        print 'selected';
                                                    }
                                                } ?>>Левитация</option>
                </select>
            </div>
            <div class="input-group">
                <textarea class="form-control" placeholder="Расскажите о себе..." name="bio" <?php if ($errors['bio']) {
                                                                                                    print 'class="error"';
                                                                                                } ?> value="<?php print $values['bio']; ?>"></textarea>
            </div>
            <div class="form-check" id="policy">
                <input class="form-check-input" type="checkbox" value="y" id="policy" name="policy" checked />
                <label class="form-check-label" for="policy">Ознакомлен с <a href="./task3.html">политикой конфиденциальности</a>.</label>
            </div>
            <button class="btn btn-primary" type="submit" id="send-btn">Отправить</button>
        </form>
    </div>
</body>

</html>
