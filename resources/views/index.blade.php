<html>

<head>
    <!-- Css Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/angular-busy.min.css" rel="stylesheet">

    <!-- AngularJs -->
    <script type="application/javascript" src="js/angular.min.js"></script>
    <script type="application/javascript" src="js/angular-ui-router.js"></script>
    <script type="application/javascript" src="js/angular-breadcrumb.min.js"></script>
    <script type="application/javascript" src="js/angular-busy.min.js"></script>

    <!-- Js Libraries -->
    <script type="application/javascript" src="js/jquery.min.js"></script>
    <script type="application/javascript" src="js/bootstrap.min.js"></script>

    <!-- AngularApp -->
    <script type="application/javascript" src="app/app.js"></script>
    <script type="application/javascript" src="app/modules/app.constants.js"></script>
    <script type="application/javascript" src="app/modules/app.routes.js"></script>
    <script type="application/javascript" src="app/common/app.common.js"></script>
    <script type="application/javascript" src="app/common/app.directives.js"></script>

    <!--Sindaci-->
    <script type="application/javascript" src="app/sections/sectionsCtrl.js"></script>
    <script type="application/javascript" src="app/sections/sectionCtrl.js"></script>
    <!--Candidati
    <script type="application/javascript" src="app/items/itemsCtrl.js"></script>
    <script type="application/javascript" src="app/item/itemCtrl.js"></script>
    -->
    <base href="/">

</head>

<body ng-app="paltamark">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-toggle">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#/">Elezioni</a>
    </div>
    <div class="collapse navbar-collapse" id="nav-toggle">
        <ul class="nav navbar-nav">
            <li data-ui-sref-active="active"><a data-ui-sref="sindaciList">Sindaci</a></li>
            <li data-ui-sref-active="active"><a data-ui-sref="candidatiList">Candidati</a></li>
            <li data-ui-sref-active="active"><a data-ui-sref="listeList">Liste</a></li>
            <li data-ui-sref-active="active"><a data-ui-sref="sezioniList">Sezioni</a></li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
            <input type="text" class="form-control" placeholder="Search">
        </form>
    </div>
</nav>

<div class="container">
    <div data-ncy-breadcrumb></div>
    <div data-ui-view></div>
</div>

<footer id="footer" class="footer">
    <div class="floatright">
        <p class="text-muted"><a href="http://vikkio.it">vikkio</a></p>
    </div>
</footer>


</body>

</html>