<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Гостевая книга </h1>
    <hr/>
    <form method="POST" id="id-form_messages">

        <div class="form-group">
            <label for="name">Имя: *</label>
            <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input class="form-control" placeholder="E-mail" name="email" type="email" id="email">
        </div>

        <div class="form-group">
            <label for="message">Сообщение: *</label>
            <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50"
                      id="message"></textarea>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Добавить">
        </div>

        <div class="text-right"><b>Всего сообщений:</b> <i class="badge">0</i></div>
        <br/>

        <div class="messages">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>Ruslgigar</span>
                        <span class="pull-right label label-info">17:15:00 / 03.07.2016</span>
                    </h3>
                </div>
                <div class="panel-body">
                   Lowest Price Viagra With A Perscription Erfahrungen Mit Cialis 5mg cialis Cheap Linisopril Overnight Online Doryx Website Cod Cheapeast Without A Script Levitra Trial Cheapest Viagra On The Internet cialis Female Kamagra Review Amoxicillin Dental Appointments Cialis 10mg Filmtabletten 4 Stuck Preis Cheap Sex Pills Kamagra Oral Jelly Europe Buy Cialis Abortion Pill Online Kamagra Daily Use Clomid Et Grossesse Extra Uterine Priligy Deutschland Kaufen buy cialis Comprare Il Viagra Canidian Pharmacies..
                    <hr/>
                    <div class="pull-right">
                        <a href="#" class="btn btn-info">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

    
</body>
</html>