<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>GGBlog</title>
    <style>
        .layout {
            width: 100%;
            max-width: 1024px;
            margin: auto;
            background-color: #ffffff;
            border-collapse: collapse;
        }

        .layout tr td {
            padding: 20px;
            vertical-align: top;
            border: solid 1px #808080;
        }

        .header {
            font-size: 30px;
        }

        .footer {
            text-align: center;
        }

        .sidebarHeader {
            font-size: 20px;
        }

        .sidebar ul {
            padding-left: 20px;
        }

        a, a:visited {
            color: darkgreen;
        }
    </style>
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            GGBlog
        </td>
    </tr>
    <tr>
        <td>
            <h2>Топ 10 приветствий:</h2>
            <p>Просто здравствуй, просто как дела</p>
            <hr>

            <h2>Топ 10 прощаний:</h2>
            <p>Ту ту ту ту ту туту туту</p>
        </td>

        <td width="300px" class="sidebar">
            <div class="sidebarHeader">Меню</div>
            <ul>
                <li><a href="/">Главная страница</a></li>
                <li><a href="/about-me">Обо мне</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="footer" colspan="2">Все права защищены (c) GGBlog</td>
    </tr>
</table>

</body>
</html>