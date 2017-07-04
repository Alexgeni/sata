var app = angular.module('trans',['ngSanitize'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

app.controller('en',function($scope){
    $scope.title = "SatA";
    $scope.home="Home";
    $scope.add="Add CH";
    $scope.about="About";
    $scope.dtitle="Designer and programmer"
    $scope.designer="Mohamed Shaaban";
    $scope.desc="Expermintal website";
    $scope.map="Site map";
    $scope.search="Search here!";
    $scope.dir="ltr";
    $scope.lang="en";
    $scope.lang_v="ع";
});
app.controller('ar',function($scope){
    $scope.title="ساتا";
    $scope.home="الرئيسية";
    $scope.add="إضافة قناة";
    $scope.about="حول الموقع";
    $scope.dtitle="تصميم و برمجة";
    $scope.designer="محمد شعبان";
    $scope.desc="موقع تجريبى ";
    $scope.map="خريطة الموقع";
    $scope.search="بحث";
    $scope.dir="rtl";
    $scope.lang="ar";
    $scope.lang_v="En";
});
