<!DOCTYPE html>
<?php
error_reporting(E_ERROR | E_PARSE);
include_once('../config/config.php');
include_once('../config/translate.php');
include '../scripts/opentexts.php';
//echo basename($_SERVER['REQUEST_URI']);
?>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Find.dhamma.gift</title>
    <!-- Bootstrap CSS -->
<link href="/assets/css/jquery-ui.min.css" rel="stylesheet"/>
<link href="/assets/css/styles.css" rel="stylesheet" />
<link href="/assets/css/extrastyles.css" rel="stylesheet" />
<script src="/assets/js/jquery-3.7.0.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>

<script src="/assets/js/bootstrap.bundle.5.3.1.min.js"></script>
<script src="/assets/js/fontawesome.6.1.all.js" defer></script>
<link href="/assets/img/favico-noglass.png" rel="icon">

  <!-- Загрузка иконки для iOS -->
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favico-noglass.png">
    <style>
  @media (max-width: 767px) {
    #searchbtn {
      display: none; /* Скрываем текстовую кнопку на мобильных устройствах */
    }

    #searchbtn-icon {
      display: inline-block; /* Отображаем иконку лупы на мобильных устройствах */
    }
  }

  @media (min-width: 768px) {
    #searchbtn {
      display: inline-block; /* Отображаем текстовую кнопку на устройствах с шириной экрана больше 767px */
    }

    #searchbtn-icon {
      display: none; /* Скрываем иконку лупы на устройствах с шириной экрана больше 767px */
    }
  }
</style>
</head>

<body>

    <div class="container">
                      <div style="position: fixed; right: 20px; top: 20px;" class="align-items-center form-check-inline mx-0">
     <a id="theme-button" class=" mb-1 text-muted ">
<i onclick="switchIcon(this)" class="fa-solid fa-circle-half-stroke "></i>
</a>	  
</div>
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3">
    <h2 class="text-center my-4 mb-5">       <a href="/ru/new">     <img loading="lazy" alt="Precise search in Pali Suttas and Vinaya" src="/assets/img/dhammafindlogo.webp"  style="height:30px;"></a>   Search for Truth</h2>
        
<form id="searchForm" action="/s.php" method="GET">
    <div class="my-3 form-group input-group ui-widget dropup rounded-pill">
        <label class="sr-only dropup rounded-pill" for="paliauto"></label>
        <div class="searchinputdiv">
            <input name="s" type="search" class="form-control rounded-pill searchinput" id="paliauto" placeholder="e.g. Kāyagat or sn56.11" multiple>
        </div>
                <div class="input-group-append ms-2">
            <button onclick="document.getElementById( 'spinner' ).style.display = 'block'" type="submit" id="searchbtn" class="btn searchbutton btn-primary mainbutton ms-1 me-1 rounded-pill">
                Search
            </button>
            <button onclick="document.getElementById( 'spinner' ).style.display = 'block'" type="submit" id="searchbtn-icon" class="btn searchbutton btn-primary mainbutton ms-1 me-1 rounded-pill">
                <i class="fas fa-search fa-flip-horizontal" aria-hidden="true"></i>
            </button>
        </div>

        <div class="searchcheckboes mt-2">
      
      <!-- Чекбоксы для выбора места поиска -->
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="an">
            <label class="form-check-label" for="checkboxAn">AN</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="sn">
            <label class="form-check-label" for="checkboxSn">SN</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="mn">
            <label class="form-check-label" for="checkboxMn">MN</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="dn">
            <label class="form-check-label" for="checkboxDn">DN</label>
        </div>   
        <br>
        <!-- Добавьте другие чекбоксы по аналогии для MN, DN и т.д. -->
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="kn">
            <label class="form-check-label" for="checkboxKn">KN</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="lt">
            <label class="form-check-label" for="checkboxLt">Later KN</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="vn">
            <label class="form-check-label" for="checkboxVn">Vinaya</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="dcheckbox" value="kp">
            <label class="form-check-label" for="checkboxKp">Later Vinaya</label>
        </div>   
        </div>

    </div>

    <div class="justify-content-center text-center">
        <div id="spinner" style="display: none;">
            <div class="spinner-border mt-3" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
</form>
            </div><div class="container text-center mt-5">
<?php
if ( $lang == "ru" ) {
include '../assets/common/horizontalMenuRu.php'; 
} else {
include '../assets/common/horizontalMenuEn.php'; 
} 
?>
<a href="/word.php">Word </a>
<a href="/result/r.html">r.html </a> 
<a href="/result/w.html">w.html </a><br>
<a href="/assets/texts/sutta.php">Dhamma </a>
<a href="/assets/texts/pm.php">bupm </a>
<a href="/assets/texts/bipm.php">bipm </a>
</div>

        </div>
    </div>
    
    
<script>
$.ajax({
  url: "/assets/texts/sutta_words.txt",
  dataType: "text",
  success: function(data) {

    var accentMap = {
      "ā": "a",
      "ī": "i",
      "ū": "u",
      "ḍ": "d",
      "ḷ": "l",
      "ṃ": "ṁ",
      "ṁ": "n",
      "ṁ": "m",
      "ṅ": "n",
      "ṇ": "n",
      "ṭ": "t",
      "ñ": "n",
      "ññ": "n",
      "ss": "s",
      "aa": "a",
      "ii": "i",
      "uu": "u",
      "dd": "d",
      "kk": "k",
      "ḍḍ": "d",
      "ḷḷ": "l",
      "ṇṇ": "n",
      "ṭṭ": "t",
      "cc": "c",
      "pp": "p",
	  "cch": "c",
      "ch": "c",
      "kh": "k",
      "ph": "p",
      "th": "t",
      "ṭh": "t"
    };

    var normalize = function(term) {
      var ret = "";
      for (var i = 0; i < term.length; i++) {
          ret += accentMap[term.charAt(i)] || term.charAt(i);
      }
      return ret;
    };

    var allWords = data.split('\n');

    $("#paliauto").autocomplete({
      position: {
        my: "left bottom",
        at: "left top",
        collision: "flip"
      },
      minLength: 0,
      multiple: /[\s\*]/, // изменение регулярного выражения для разделения по пробелу или звездочке
      source: function(request, response) {
        var terms = request.term.split(/[\|\s\*]/); // изменение регулярного выражения для разделения по пробелу или звездочке или |
        var lastTerm = terms.pop().trim();
        var otherMinLength = 3;

        if (lastTerm.length < otherMinLength) {
          response([]);
          return;
        }

        var re = $.ui.autocomplete.escapeRegex(lastTerm);
        var matchbeginonly = new RegExp("^" + re, "i");
        var matchall = new RegExp(re.replace(/([a-z])\1/gi, "$1$1"), "i");

        var listBeginOnly = $.grep(allWords, function(value) {
          value = value.label || value.value || value;
          var results = matchbeginonly.test(value) || matchbeginonly.test(normalize(value));
          return results;
        });

        var listAll = $.grep(allWords, function(value) {
          value = value.label || value.value || value;
          var results = matchall.test(value) || matchall.test(normalize(value));
          return results;
        });

        listAll = listAll.filter(function(el) {
          return !listBeginOnly.includes(el);
        });

        // Ограничение количества подсказок до 10
        var maxRecord = 1000;
        var resultList = listBeginOnly.concat(listAll).slice(0, maxRecord);

        response(resultList);
      },
      focus: function(event, ui) {
        // Удаляем автоматическое введение при наведении мыши
        return false;
      },
      select: function(event, ui) {
  var terms = this.value.split(/([\|\s\*])/);
  terms.pop();
  terms.push(ui.item.value);
  
  for (var i = 1; i < terms.length; i += 2) {
    if (terms[i] === "*") {
      terms[i] = "*";
    } else if (terms[i] === "|") {
      terms[i] = "|";
    } else {
      terms[i] = " ";
    }
  }

  this.value = terms.join("");
  return false;
}

    }).autocomplete("widget").addClass("fixed-height");
  }
});
</script>
<script defer>
$(function () {
        $('[data-bs-toggle="tooltip"]').tooltip();
    });
</script>

<script defer src="/assets/js/themeswitch.js"></script>
</body>

</html>

