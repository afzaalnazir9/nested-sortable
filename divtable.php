<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <div class="container main-body">
  <div class="search">
    <input type="text" placeholder="Search...">
    <button><i class="fas fa-search"></i></button>
  </div>

  
<div class="container main">
  <div class="row header">
    <?php
    $headerLabels = array('<i class="fas fa-plus"></i>', "Name", "Gender", "Weight", "Birthday", "Bio", "Status");
    foreach ($headerLabels as $label) {
      echo '<div class="cell">' . $label . '</div>';
    }
    ?>
  </div>

  <?php
  $numRows = 7; // Change this to however many rows you want to generate

  for ($i = 0; $i < $numRows; $i++) {
    echo '<div class="row">';
    echo '<div class="cell"><button><i class="fa-solid fa-ellipsis"></i></button></div>';
    echo '<div class="cell"><input type="text"></div>';
    echo '<div class="cell"><select><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select></div>';
    echo '<div class="cell"><input type="text"></div>';
    echo '<div class="cell"><input type="date"></div>';
    echo '<div class="cell"><input type="text"></div>';
    echo '<div class="cell"><label class="switch"><input type="checkbox"><span class="slider"></span></label></div>';
    echo '</div>';
  }
  ?>

<div class="row">
    <div class="cell"><button><i class="fa-solid fa-ellipsis"></i></button></div>
    <div class="cell"><input type="text"></div>
    <div class="cell"><select><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select></div>
    <div class="cell"><input type="text"></div>
    <div class="cell"><input type="date"></div>
    <div class="cell"><input type="text"></div>
    <div class="cell"><label class="switch"><input type="checkbox"><span class="slider"></span></label></div>
</div>

</div>
<div class="pagination">
  <button class="prev"><i class="fas fa-angle-left"></i></button>
  <span class="page-numbers">Page 1 of 3</span>
  <button class="next"><i class="fas fa-angle-right"></i></button>
</div>
</div>

<style>

.main-body {
  position: relative;
  padding-bottom: 40px; / To make room for pagination /
  margin-top:50x;
}

.search {
  position: absolute;
  top: 0;
  right: 0;
  margin-top:32px;
}

.pagination {
  position: absolute;
  bottom: 0;
  right: 0;
}

  .search-pagination {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}
/* .search {
  display: flex;
  align-items: center;
} */
.search input[type="text"] {
  padding: 5px 10px;
  border: none;
  border-radius: 5px;
  margin-right: 10px;
  font-size: 14px;
}
.search button {
  padding: 5px 10px;
  border: none;
  background-color: #ccc;
  border-radius: 5px;
  font-size: 14px;
  color: #fff;
}
  .pagination button {
    margin-left: 10px;
  }
.main {
  display: table;
  margin-top: 70px;
  margin-bottom:30px;
}

.row {
  display: table-row;
}

.cell {
  display: table-cell;
  border: 1px solid black;
  padding: 10px;
}

.header {
  font-weight: bold;
}

select {
  width: 100%;
}

textarea {
  width: 100%;
  height: 100px;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  display: none;
}

.slider {
  position: absolute;
  cursor: pointer;
  border-radius: 50px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}
.slider::before, .slider::after {
  border-radius: 50%; / adjust the value to your preference /
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/ Rounded sliders /
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

</body>
</html>