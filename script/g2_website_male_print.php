<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700&display=swap&subset=chinese-traditional" rel="stylesheet">

<style>

body {
  font-family: 'Noto Sans TC', sans-serif;
}


.head_page{

  background-color: white;
  color: black;
  margin: 60px 82px 200px 72px;
  padding: 20px;
  height: 1200px;
  border: 2px solid #ffffff;

  table-layout: auto;
  width: 840px;
}


.head_page_block1{
  position: static;
  margin: 30px 170px 0px 170px;
  border:1px solid #717071;
  height: 180px;

  border-radius:10px;

}

.head_page_block2{
  position: static;
  margin: 0px 170px 0px 170px;
  height: 100px;
  background: #E74C3C;
  height: 70px;

  border-radius:10px;

}


.head_pager_hr {
  width:45%;
  margin: 0px 20px 0px 190px;
  text-align: left;
  color: #1B4F72;
}


.public_page{
  background-color: white;
  color: black;
  margin: 60px 0px 200px 0px;
  padding: 0px;

  border: 0px solid #ffffff;

  table-layout: auto;
  width: 1000px;
  height: 1300px;
}


.overview_top {
  position: static;
  color: black;
  margin: 60px 0px 0px 132px;
  padding: 20px 0px 20px 0px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
  height: 100px;
}



.overview_top_left {
  position: static;
  color: black;
  margin: 60px 0px 0px 52px;
  padding: 20px 0px 20px 0px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
  height: 100px;
}



.overview {
  position: static;
  background-color: #f2f5f8;
  color: black;
  margin: 20px 32px 250px 22px;
  padding: 20px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;
  height: 1200px;
}


.table_overview{
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 20px;
  border: 2px solid #D5D8DC;

  table-layout: auto;
  width: 780px;
  height: 350px;

  border-radius:10px;

}

.table_overview_left{
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 20px;
  border: 2px solid #D5D8DC;

  table-layout: auto;
  width: 780px;
  height: 350px;

  border-radius:10px;

}


.table_overview td:nth-child(2) {
  width: 360px;
}

.table_overview td:nth-child(3) {
  width: 147px;
}


.disease_top{
  position: static;
  color: black;
  margin: 0px 0px 0px 132px;
  padding: 25px 0px 20px 0px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
}

.disease_top2{
  position: static;
  color: black;
  margin: 0px 0px 0px 132px;
  padding: 25px 0px 0px 0px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
}

.disease_top_left{
  position: static;
  color: black;
  margin: 0px 0px 0px 52px;
  padding: 25px 0px 20px 0px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
}

.disease_top_left2{
  position: static;
  color: black;
  margin: 0px 0px 0px 52px;
  padding: 25px 0px 0px 0px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
}


.disease_title {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 42px 0px 22px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;

}




.table_disease_tile{
  position: static;
  background-color: #fcf9d8;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 0px;
  border: 1px solid #F7DC6F;

  table-layout: auto;
  width: 780px;
  height: 240px;

  font-weight: normal;

  border-radius:10px;

}


.table_disease_tile th {
  border-bottom: 1px solid #F7DC6F;
  padding: 8px;
}


.table_disease_tile ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.table_disease_tile li {
  padding-left: 2em;
  text-indent: -.7em;
}

.table_disease_tile li::before {
  content: "\25AA ";
  color: #000080; /* or whatever color you prefer */
  font-weight: bold;
  font-size: 1.3em;
  display: inline-block;
}



.table_disease_tile_left{
  position: static;
  background-color: #fcf9d8;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 1px solid #F7DC6F;

  table-layout: auto;
  width: 780px;
  height: 240px;

  font-weight: normal;

  border-radius:10px;

}


.table_disease_tile_left th {
  border-bottom: 1px solid #F7DC6F;
  padding: 8px;
}


.table_disease_tile_left ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.table_disease_tile_left li {
  padding-left: 2em;
  text-indent: -.7em;
}

.table_disease_tile_left li::before {
  content: "\25AA ";
  color: #000080; /* or whatever color you prefer */
  font-weight: bold;
  font-size: 1.3em;
  display: inline-block;
}





.table_disease_tile_last{
  position: static;
  background-color: #fcf9d8;
  color: black;
  margin: 10px 0px 10px 32px;
  padding: 0px;
  border: 1px solid #F7DC6F;

  table-layout: auto;
  width: 780px;
  height: 200px;

  font-weight: normal;
  border-radius:10px;

}


.disease_title_last {
  position: static;
  color: black;
  margin: 0px 32px 0px 22px;
  padding: 0px;

  table-layout: auto;
  width: 870px;
  border-radius:10px;

}



.disease_detail {
  position: static;
  background-color: #f2f5f8;
  color: black;
  margin: 0px 42px 0px 22px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;
  height: 875px;

}

.disease_detail2 {
  position: static;
  background-color: #f2f5f8;
  color: black;
  margin: 0px 42px 0px 22px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;
  height: 1170px;
}


.disease_detail3 {
  position: static;
  background-color: #f2f5f8;
  color: black;
  margin: 0px 42px 0px 22px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;
  height: 1200px;
}

.disease_detail4 {
  position: static;
  background-color: #f2f5f8;
  color: black;
  margin: 0px 42px 0px 22px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;
  height: 900px;
}

.disease_detail5 {
  position: static;
  background-color: #f2f5f8;
  color: black;
  margin: 0px 42px 0px 22px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;
  height: 1100px;
}

.disease_detail6 {
  position: static;
  background-color: #f2f5f8;
  color: black;
  margin: 0px 42px 0px 22px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 910px;
  height: 1000px;
}


th.disease_detail{
  position: static;
  background-color: #117A65;
  color: white;
}


.disease_detail_outer {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;

  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 640px;

  border-radius:10px;
}


.disease_detail_outer_left {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;

  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 640px;

  border-radius:10px;
}



.disease_detail_outer2 {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 750px;

  border-radius:10px;
}

.disease_detail_outer2_left {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 750px;

  border-radius:10px;
}



.disease_detail_outer3 {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 803px;

  border-radius:10px;
}

.disease_detail_outer3_left {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 803px;

  border-radius:10px;
}


.disease_detail_outer4 {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 790px;

  border-radius:10px;
}

.disease_detail_outer4_left {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 790px;

  border-radius:10px;
}


.disease_detail_outer5 {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 660px;

  border-radius:10px;
}


.disease_detail_outer5_left {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 660px;

  border-radius:10px;
}



.disease_detail_outer6 {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 640px;

  border-radius:10px;
}


.disease_detail_outer6_left {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 640px;

  border-radius:10px;
}


.table_disease_detail{
  position: static;
  background-color: white;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 1px solid #e5e6e6;

  table-layout: auto;
  width: 741px;
  height: 600px;

  border-radius:10px;

}

.table_disease_detail_firstcol{
  width: 60px;

}


.table_disease_detail td:nth-child(1) {
  width: 120px;
}


.table_disease_detail td:nth-child(2) {
  width: 120px;

}

.table_disease_detail td:nth-child(3) {
  width: 120px;
}


.table_disease_detail th{
  height: 20px;
}

.table_disease_detail th tr td{

  text-align: center;
  vertical-align: middle;

}


.table_disease_detail th[scope=col]{
  position: static;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #cfece9;
  color: black;
  font-weight: 300;

}

.table_disease_detail2{
  position: static;
  background-color: white;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 1px solid #D5D8DC;

  table-layout: auto;
  width: 741px;
  height: 710px;

  border-radius:10px;
}


.table_disease_detail2 td:nth-child(1) {
  width: 120px;
}

.table_disease_detail2 td:nth-child(2) {
  width: 120px;
}

.table_disease_detail2 td:nth-child(3) {
  width: 120px;
}


.table_disease_detail2 th{
  height: 20px;
}

.table_disease_detail2 th tr td{

  text-align: center;
  vertical-align: middle;

}

.table_disease_detail2 th[scope=col]{
  position: static;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #cfece9;
  color: black;
  font-weight: 300;
  width: 741px;
  height: 20px;
}








.high_risk_disease{
  position: static;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: top;
  background-color: #ffffff;
  color: black;
  margin: -850px 40px 0px 450px;
  width: 400px;
  height: 810px;
  border: 1px solid white;
}


.high_risk_disease th {
  height: 10px;
  padding-left: 20px;
  padding-right: 20px;
  padding-bottom: 0px;
}

.high_risk_disease td{
  padding-left: 40px;
}

.img_last {
  margin: 10px 40px 0px 40px;
}

.table_disease_description{
  position: static;
  background-color: white;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 1px solid #e5e6e6;

  table-layout: auto;
  width: 741px;
  height: 600px;

  border-radius:10px;

}


.table_disease_description td{
  padding: 10px;
}

.table_disease_description th[scope=col]{
  position: static;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #cfece9;
  color: black;
  font-weight: 300;

}

.table_disease_description td:nth-child(1) {
  width: 100px;
  height: 20px;
}

.disease_description_outer {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 640px;

  border-radius:10px;
}


.disease_description_outer2 {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 102px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 1050px;

  border-radius:10px;
}


.disease_description_outer3 {
  position: static;
  background-color: white;
  color: black;
  margin: 0px 0px 0px 32px;
  padding: 0px;
  border: 0.5px solid #e5e6e6;

  table-layout: auto;
  width: 780px;
  height: 995px;

  border-radius:10px;
}


</style>
</head>

<body>

<script>

      var g2Num  = prompt("Please input the sample ID: ");
      var date = g2Num.substring(2, 8)
      alert("Sample ID is " + g2Num + ".");

</script>

<?php

  // define the color
  $color_disease_ratio = "#3498DB";
  $color_lowrisk = "#F5B041";
  $color_highrisk = "#E74C3C";

  //read the disease risk file
  $filename = '/Users/hou/Desktop/tci/g2_auto/result/190712/G2190712-01/G2190712-01_female_disease_ratio.csv';

  // The nested array to hold all the arrays
  $disease_ratio = [];

  // Open the file for reading
  if (($h = fopen("{$filename}", "r")) !== FALSE)
  {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
    {
      // Each individual array is being pushed into the nested array
      $disease_ratio[] = $data;
    }

    // Close the file
    fclose($h);
  }

  // Display the code in a readable format
  //echo $disease_ratio[2][1];



  // define the color

  //read the disease risk file
  $filename = '/Users/hou/Desktop/tci/g2_auto/result/190712/G2190712-01/G2190712-01_female_risk_disease.csv';

  // The nested array to hold all the arrays
  $disease_risk = [];

  // Open the file for reading
  if (($h = fopen("{$filename}", "r")) !== FALSE)
  {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
    {
      // Each individual array is being pushed into the nested array
      $disease_risk[] = $data;
    }

    // Close the file
    fclose($h);
  }

  // Display the code in a readable format
  //echo $disease_ratio[2][1];



  // define the color
  $color_genolowrisk = "#F5B041";
  $color_genohighrisk = "#E74C3C";

  //read the disease risk file
  $filename = '/Users/hou/Desktop/tci/g2_auto/result/190712/G2190712-01/G2190712-01_gene_risk.csv';

  // The nested array to hold all the arrays
  $genotype = [];

  // Open the file for reading
  if (($h = fopen("{$filename}", "r")) !== FALSE)
  {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
    {
      // Each individual array is being pushed into the nested array
      $genotype[] = $data;
    }

    // Close the file
    fclose($h);
  }

  // Display the code in a readable format

  //echo $genotype[1][3];
  //echo "<br>";
  //echo $genotype[1][4];
  //echo "<br>";
  //echo $genotype[1][5];



  // define the color

  //read the disease risk file
  $filename = '/Users/hou/Desktop/tci/g2_auto/result/190712/G2190712-01/G2190712-01_female_nutrient_description.csv';

  // The nested array to hold all the arrays
  $nutrient = [];

  // Open the file for reading
  if (($h = fopen("{$filename}", "r")) !== FALSE)
  {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
    {
      // Each individual array is being pushed into the nested array
      $nutrient[] = $data;
    }

    // Close the file
    fclose($h);
  }

  // Display the code in a readable format
  //echo $disease_ratio[2][1];



  // define the color

  //read the disease risk file
  $filename = '/Users/hou/Desktop/tci/g2_auto/result/190712/G2190712-01/G2190712-01_membership.csv';

  // The nested array to hold all the arrays
  $membership = [];

  // Open the file for reading
  if (($h = fopen("{$filename}", "r")) !== FALSE)
  {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
    {
      // Each individual array is being pushed into the nested array
      $membership[] = $data;
    }

    // Close the file
    fclose($h);
  }

  // Display the code in a readable format
  //echo $membership[2][2];

?>



<div class = head_page>
  <!-- 封面-->

  <br><br><br><br><br><br><br><br><br><br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

  <img src= "../graph/tci_logo.png" alt= "tcigene_logo" align="middle" style="width:170px;height:216px;">

  <br><br><br><br>

  <h1 align = "center"><font size="7" face = 'Noto Sans TC' style="font-weight: normal;">健康全檢基因檢測報告</font></h1>

  <br><br><br>

  <div class = head_page_block1>
    <br>
    <font size="4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      醫院診所：&nbsp&nbsp&nbsp&nbsp
      <?php echo $membership[2][2]; ?>
    </font>
      <hr class = "head_pager_hr">
    <br>
    <font size="4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      會員編號：&nbsp&nbsp&nbsp&nbsp
      <?php echo $membership[3][2]; ?>
    </font>
      <hr class = "head_pager_hr">
    <br>
    <font size="4">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      報告日期：&nbsp&nbsp&nbsp&nbsp
      <?php echo $membership[4][2]; ?>
    </font>
      <hr class = "head_pager_hr">
    <br>
  </div>


  <p align = "center"><font size="3">※會員編碼共八碼，請確認末四碼為您本人身分證(或護照)號碼之末四碼</font></p>



  <div class = head_page_block2 align = "center">
    <br>
    <font size="3" color = "white">
      誠摯為您提供專業諮詢服務，全面守護您的健康。</font>
    <br>
  </div>


  <br><br><br><br><br><br>

  <hr>

  <p align = "center">大江基因醫學股份有限公司 ｜ PREDICT · PREVENT · PERSONALIZE</p>

</div>


<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書2.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1350px;">

  <p align = "right">
    <font color = "grey" size = "1" style = "font-weight: 100;">
    G2190712-01</font> <font color = "white">123</font></p>

</div>


<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書3.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1400px;">

</div>



<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書2.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1200px;">

</div>




<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書5.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

</div>


<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書6.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

</div>



<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書7.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

</div>


<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書8.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

</div>




<div class = "overview_top">

  <img src= "../graph/疾病風險頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

  <br><br><br><br><br>
</div>




<div class = "overview">

<br><br><br><br>

  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/新陳代謝icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp新陳代謝相關</font>
        <hr color = #c7c8c8>

      </th>
    </tr>

    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr height>
      <td><font style = "font-weight: 300;" size = "4">肥胖症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[1][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[1][2].'</div>';?>
        </font>
      </td>


      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[1][3]}倍".'</div>';?>
        </font>
      </td>

    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">第二型糖尿病</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[2][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[2][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[2][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">高血壓</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[3][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[3][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[3][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">高血脂</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[4][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[4][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[4][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">高尿酸血症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[5][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[5][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[5][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>


  <br><br>

  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/心血管icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font style = "font-weight: 300;" size = "6">&nbsp心血管疾病相關</font>
        <hr color = #c7c8c8>
      </th>
    </tr>

    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">冠狀動脈疾病</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[6][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[6][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[6][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">心房顫動</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[7][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[7][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[7][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">腦中風</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[8][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[8][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[8][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">靜脈曲張</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[9][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[9][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[9][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>


  </table>


  <br><br><br><br>
  <hr>
  <p align = "center">05</p>

</div>





<div class = "overview_top_left">

  <img src= "../graph/疾病風險頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">


</div>




<div class = "overview">

<br><br><br><br>

  <table class = "table_overview_left">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/神經骨骼icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font style = "font-weight: 300;" size = "6">&nbsp神經及骨骼退化相關</font>
        <hr color = #c7c8c8>

      </th>
    </tr>


    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">晚發型阿茲海默症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[10][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[10][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[10][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">帕金森氏症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[11][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[11][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[11][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">退化性關節炎</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[12][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[12][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[12][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">骨質疏鬆</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[13][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[13][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[13][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">肌少症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[14][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[14][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[14][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>


  <br>

  <table class = "table_overview_left">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/婦科icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp婦科相關</font>
        <hr color = #c7c8c8>

      </th>
    </tr>



    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">子宮內膜異位</font></td>
      <td align = "center"><font color = "#A6ACAF" size = "5" style = "font-weight: 300;">無</font></td>
      <td align = "center"><font face = "Avenir LT 55 Roman" size = "6" color = "white">倍</font></td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">子宮肌瘤</font></td>
      <td align = "center"><font color = "#A6ACAF" size = "5" style = "font-weight: 300;">無</font></td>
      <td align = "center"><font face = "Avenir LT 55 Roman" size = "6" color = "white">倍</font></td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">多囊性卵巢症候群</font></td>
      <td align = "center"><font color = "#A6ACAF" size = "5" style = "font-weight: 300;">無</font></td>
      <td align = "center"><font face = "Avenir LT 55 Roman" size = "6" color = "white">倍</font></td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">女性尿道感染</font></td>
      <td align = "center"><font color = "#A6ACAF" size = "5" style = "font-weight: 300;">無</font></td>
      <td align = "center"><font face = "Avenir LT 55 Roman" size = "6" color = "white">倍</font></td>
    </tr>

  </table>

  <br><br><br><br><br>
  <hr>
  <p align = "center">06</p>

</div>



<div class = "overview_top">

  <img src= "../graph/疾病風險頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">


</div>




<div class = "overview">

<br><br><br><br>

  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/自體免疫icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp自體免疫類相關</font>
        <hr color = #c7c8c8>

      </th>
    </tr>

    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>


    <tr>
      <td><font style = "font-weight: 300;" size = "4">類風濕性關節炎</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[15][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[15][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[15][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">紅斑性狼瘡</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[16][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[16][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[16][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">自體免疫甲狀腺疾病</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[17][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[17][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[17][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">僵直性脊椎炎</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[18][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[18][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[18][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>


  <br>


  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/肝膽腸胃icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp肝膽腸胃相關</font>
        <hr color = #c7c8c8>

      </th>
    </tr>


    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">肝硬化</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[19][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[19][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[19][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">脂肪肝</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[20][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[20][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[20][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">膽石症(肝內結石、膽結石)</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[21][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[21][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[21][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">消化性潰瘍、胃食道逆流</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[22][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[22][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[22][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">大腸息肉症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[23][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[23][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[23][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

   <tr>
      <td><font style = "font-weight: 300;" size = "4">胰臟炎</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[24][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[24][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[24][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>


  </table>

  <br><br><br>
  <hr>
  <p align = "center">07</p>

</div>




<div class = "overview_top_left">

  <img src= "../graph/疾病風險頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">
  <br><br>

</div>



<div class = "overview">

<br><br><br><br>

  <table class = "table_overview_left">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/眼部icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp眼部老化相關</font>
        <hr color = #c7c8c8>

      </th>
    </tr>


    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">白內障</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[25][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[25][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[25][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">青光眼</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[26][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[26][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[26][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">黃斑部病變</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[27][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[27][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[27][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">高度近視</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[28][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[28][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[28][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>

  <br><br>

  <table class = "table_overview_left">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/精神疾病icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp精神疾病相關</font>
        <hr color = #c7c8c8>

      </th>
    </tr>


    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">憂鬱症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[29][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[29][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[29][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">躁鬱症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[30][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[30][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[30][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">思覺失調症</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[31][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[31][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[31][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>

  <br><br><br><br><br><br><br><br><br><br>
  <hr>
  <p align = "center">08</p>


</div>



<div class = "overview_top">

  <img src= "../graph/疾病風險頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">


</div>


<div class = "overview">

<br><br><br><br>

  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/其他綜合icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp其他綜合類</font>
        <hr color = #c7c8c8>

      </th>
    </tr>



    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">慢性阻塞性肺病</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[32][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[32][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[32][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">攝護腺肥大</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[33][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[33][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[33][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">腎結石</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[34][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[34][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[34][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

     <tr>
      <td><font style = "font-weight: 300;" size = "4">腎衰竭</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[35][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[35][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[35][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">氣喘</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[36][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[36][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[36][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">過敏性鼻炎</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[37][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[37][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[37][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

      <tr>
      <td><font style = "font-weight: 300;" size = "4">異位性皮膚炎</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[38][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[38][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[38][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">乾癬</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[39][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[39][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[39][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">牙周病</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[40][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[40][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[40][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>

  <br><br><br><br><br><br><br><br><br><br><br><br>
  <hr>
  <p align = "center">09</p>

</div>





<div class = "overview_top_left">

  <img src= "../graph/疾病風險頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">


</div>



<div class = "overview">


  <table class = "table_overview_left">

    <tr>
      <th colspan = "3" style="text-align: left">
        <img src= "../graph/癌症icon.png" alt= "tcigene_logo" align="left" style="width:45px;height:45px;">
        <font size = "6" style = "font-weight: 300;">&nbsp癌症</font>
        <hr color = #c7c8c8>

      </th>
    </tr>


    <tr>
      <th align = "left"><font style = "font-weight: 100;" size = "4">項目</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">您的風險程度</font></th>
      <th align = "center"><font style = "font-weight: 100;" size = "4">與平均比較</font></th>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">口腔癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[41][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[41][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[41][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">鼻咽癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[42][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[42][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[42][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">食道癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[43][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[43][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[43][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

     <tr>
      <td><font style = "font-weight: 300;" size = "4">肺癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[44][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[44][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[44][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">胃癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[45][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[45][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[45][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">肝癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[46][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[46][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[46][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">大腸癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[47][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[47][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[47][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">胰臟癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[48][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[48][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[48][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">乳癌</font></td>
      <td align = "center"><font color = "#A6ACAF" size = "5" style = "font-weight: 300;">無</font></td>
      <td align = "center"><font face = "Avenir LT 55 Roman" size = "6" color = "white">倍</font></td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">卵巢癌</font></td>
      <td align = "center"><font color = "#A6ACAF" size = "5" style = "font-weight: 300;">無</font></td>
      <td align = "center"><font face = "Avenir LT 55 Roman" size = "6" color = "white">倍</font></td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">子宮頸癌</font></td>
      <td align = "center"><font color = "#A6ACAF" size = "5" style = "font-weight: 300;">無</font></td>
      <td align = "center"><font face = "Avenir LT 55 Roman" size = "6" color = "white">倍</font></td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">攝護腺癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[49][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[49][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[49][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">膀胱癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[50][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[50][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[50][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td colspan = "3">
        <hr color = #e5e6e6 size = 1px>
      </td>
    </tr>

    <tr>
      <td><font style = "font-weight: 300;" size = "4">淋巴癌</font></td>
      <td align = "center">
        <font size = "4" face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[51][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[51][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[51][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>
  </table>

  <br>
  <hr>
  <p align = "center">10</p>

</div>




<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書15.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

</div>



<div class = "public_page">

  <img src= "../graph/G2報告書_女_v6.2_範例書16.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

</div>





<div class = "disease_top">
  <br>
  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_title" >

   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">肥胖症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>BMI(身體質量指數)超過27者，即達成人肥胖之定義。</li>
          <li>肥胖者較易罹患高血壓、糖尿病、高血脂症、睡眠呼吸中止症候群、冠狀<br>
              動脈心臟病、腦中風、膽結石及若干癌症，對健康有不良影響。
          </li>
        </ul>
      </td>


      <td align = "center">
          <font style = "font-weight: 400;">成人過重及肥胖<br></font>
          <font size="6" color = "#5DADE2">38%</font>
      </td>

    </tr>

  </table>


</div>


<br>



<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "11" style="font-weight: 400;">
        <font color = "#5DADE2">肥胖症</font>
      </th>

      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">內分泌調節相關:</li>
          <li style="font-weight: 100;">
              負責調控胰島素或雌激素的基因群。帶<br>
              有高風險基因型易因內分泌失調而增加<br>
              肥胖風險。</li>
        </ul>
      </th>

      <td style="font-weight: 300;">PPARG-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[8][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[8][3].'</div>';
                //echo $genotype[8][2];
          ?>
        </font>
      </td>

    </tr>

    <tr align="center">
      <td style="font-weight: 300;">PPARG-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[1][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[1][3].'</div>';
                //echo $genotype[1][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">ESR1</td>
      <td>
        <font color = "#9d9e9e">
        AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[9][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[9][3].'</div>';
                //echo $genotype[9][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align="center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">調節新陳代謝：</li>
          <li style="font-weight: 100;">
              參與細胞能量代謝的基因群。帶有高風<br>
              險基因型之體內能量轉換的效能較弱，<br>
              新陳代謝下降，少吃也易胖。</li>
        </ul>
      </th>

      <td style="font-weight: 300;">FTO</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[7][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[7][3].'</div>';
                //echo $genotype[7][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">UCP3</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[4][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[4][3].'</div>';
                //echo $genotype[4][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">ADRB2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[5][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[5][3].'</div>';
                //echo $genotype[5][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align="center">
        <th rowspan = "3">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">參與食慾調控：</li>
            <li style="font-weight: 100;">
                攝食後飽足感與能量消耗有關。帶有高<br>
                風險基因型呈現食慾調控能力較差，不<br>
                易有飽足感，容易因吃過量而發胖。</li>
          </ul>
        </th>

        <td style="font-weight: 300;">MC4R</td>
        <td>
          <font color = "#9d9e9e">
            TT
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[12][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[12][3].'</div>';
                  //echo $genotype[12][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">LEP</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[10][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[10][3].'</div>';
                //echo $genotype[10][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">SDC3</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[3][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[3][3].'</div>';
                //echo $genotype[3][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align="center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">參與脂肪合成與代謝：</li>
            <li style="font-weight: 100;">
                帶有高風險基因型群之脂肪分解能力較<br>
                差，造成脂肪囤積，特別是大腿、腹部<br>
                等部位。</li>
          </ul>
        </th>

        <td style="font-weight: 300;">GNB3</td>
        <td>
          <font color = "#9d9e9e">
            CC
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[2][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[2][3].'</div>';
                  //echo $genotype[2][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">PPARGC1B</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[6][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[6][3].'</div>';
                //echo $genotype[6][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p  style="font-weight: 300;" align = "center">13</p>

</div>
</div>

<br>
<br>


<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">第二型糖尿病</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>

    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>糖尿病是一種慢性的代謝異常疾病，主要原因是由於體內胰島素缺乏或功<br>
              能不全，對糖類的利用能力減低，甚至完全無法利用而造成血糖上升。
          </li>

          <li>糖尿病的分類有「胰島素依賴型」和「非胰島素依賴型」，第二型糖尿病<br>
              屬於後者；由於先天體質加上後天環境的因素如：肥胖、缺少運動、壓力<br>
              等，導致胰島素的分泌不足及功能異常。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 300;">成人 </font>
        <font size="6" color = "#5DADE2">6~12%</font>
      </td>

    </tr>

  </table>


</div>


<br>



<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "10" style="font-weight: 400;">
        <font color = "#5DADE2">第二型<br>糖尿病</font>
      </th>

      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 12px;">
          <li style="font-weight: 400;">影響胰島β細胞的發育與再生：</li>
          <li style="font-weight: 100;">
              胰島β細胞負責製造胰島素，帶有高風險<br>
              基因型易導致β細胞發育不良或不能發揮<br>
              作用，而讓胰島素分泌不足。</li>
        </ul>
      </th>

      <td style="font-weight: 300;">CDKAL1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[23][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[23][3].'</div>';
                //echo $genotype[23][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">TCF7L2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[22][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[22][3].'</div>';
                //echo $genotype[22][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">CDKN2A/B</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[24][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[24][3].'</div>';
                //echo $genotype[24][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align="center">
      <td style="font-weight: 300;">SRR</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[25][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[25][3].'</div>';
                //echo $genotype[25][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">HHEX</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[21][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[21][3].'</div>';
                //echo $genotype[21][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響胰島素的分泌能力：</li>
          <li style="font-weight: 100;">
              胰島素幫助食物中的糖份能夠順利進入<br>
              身體細胞提供能量。帶有高風險基因型<br>
              可能因胰島素分泌效能不佳，使血糖過<br>
              高。
          </li>
        </ul>
      </th>

      <td align="center" style="font-weight: 300;">SLC30A8</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[28][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[28][3].'</div>';
                //echo $genotype[28][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">KCNJ11</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[27][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[27][3].'</div>';
                //echo $genotype[27][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">KCNQ1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[26][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[26][3].'</div>';
                //echo $genotype[26][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align="center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">影響胰島素的敏感性：</li>
            <li style="font-weight: 100;">
                帶有高風險基因型易出現「胰島素抗性<br>
                」，雖然胰島素分泌量夠卻無法被身體<br>
                有效利用。
            </li>
          </ul>
        </th>

        <td style="font-weight: 300;">PTPRD</td>
        <td>
          <font color = "#9d9e9e">
            CC
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[29][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[29][3].'</div>';
                  //echo $genotype[29][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">PPARG</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[30][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[30][3].'</div>';
                //echo $genotype[30][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">14</p>

</div>
</div>

<br>
<br>


<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">高血壓</font>
      </th>

      <th align="center" scope=col style = "width: 185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>高血壓是指收縮壓≧140mmHg或舒張壓≧90mmHg。</li>
          <li>成人正常血壓值為收縮壓 < 120mmHg且舒張壓 < 80mmHg。</li>
          <li>血壓介於正常和高血壓之間的稱為高血壓前期。</li>
          <li>數種疾病已被證實和高血壓密切相關：(一)中風 (二)冠狀動脈心臟病 (三)心<br>
              臟衰竭 (四)腎臟病變。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 300;">男性</font>
        <font size="6" color = "#5DADE2">28.5%</font>
        <br>
        <font style = "font-weight: 300;">女性</font>
        <font size="6" color = "#5DADE2">21.8%</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">高血壓</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響血脂代謝及堆積：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易造成血管壁脂肪堆<br>
              積，血管壁增厚使得可供血液流動的血<br>
              管越來越細而造成高血壓的症狀。</li>
        </ul>
      </th>

      <td style="font-weight: 300;">NT5C2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[52][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[52][3].'</div>';
                //echo $genotype[52][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">調節血管收縮的作用：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易造成體內血管收縮<br>
              素的作用失衡，使小動脈壁肌肉經常性<br>
              收縮從而使血壓升高。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">AGT</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[50][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[50][3].'</div>';
                //echo $genotype[50][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">AGTR1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[51][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[51][3].'</div>';
                //echo $genotype[51][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">NOS3</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[57][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[57][3].'</div>';
                //echo $genotype[57][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">CALCA</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[58][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[58][3].'</div>';
                //echo $genotype[58][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align="center">
        <th rowspan = "4">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">調節鈉離子與水分代謝：</li>
            <li style="font-weight: 100;">
                帶有高風險基因型會影響體內鈉離子的<br>
                代謝，造成體內水分滯留，促使血壓上<br>
                升。
            </li>
          </ul>
        </th>

        <td style="font-weight: 300;">ADD1</td>
        <td>
          <font color = "#9d9e9e">
            GG
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[53][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[53][3].'</div>';
                  //echo $genotype[53][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">FGF5</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[56][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[56][3].'</div>';
                //echo $genotype[56][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td style="font-weight: 300;">STK39</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[55][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[55][3].'</div>';
                //echo $genotype[55][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align="center">
      <td style="font-weight: 300;">NEDD4L</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[54][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[54][3].'</div>';
                //echo $genotype[54][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">15</p>


</div>
</div>


<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_title" >
   <table class="table_disease_tile_left">


    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">高血脂</font>
      </th>

      <th align="center" scope=col style = "width: 185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>




    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>血脂，指血液中的脂肪，主要包含「膽固醇」及「三酸甘油酯」。</li>
          <li>當血中之總膽固醇和三酸甘油酯，其中之一或兩者皆超過正常值<br>
              (>200mg/dl)時，即稱為高血脂症。
          </li>
          <li>高血脂症除會導致心臟疾病之外，也與腦中風、高血壓、糖尿病、腎病<br>
              等慢性疾病息息相關。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 300;">男性</font>
        <font size="6" color = "#5DADE2">23.8%</font>
        <br>
        <font style = "font-weight: 300;">女性</font>
        <font size="6" color = "#5DADE2">19.8%</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "10" style="font-weight: 400;">
        <font color = "#5DADE2">高血脂</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">調節肝臟脂質合成：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會增加體內三酸甘油<br>
              脂的合成量、加速膽固醇形成的速度，<br>
              造成血脂過高。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">GCKR</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[66][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[66][3].'</div>';
                //echo $genotype[66][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">GALNT2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[65][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[65][3].'</div>';
                //echo $genotype[65][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HMGCR</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[67][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[67][3].'</div>';
                //echo $genotype[67][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MLXIPL</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[68][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[68][3].'</div>';
                //echo $genotype[68][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與脂質代謝：</li>
          <li style="font-weight: 100;">
              脂質在進入肝臟進行代謝之前，會先轉<br>
              化成脂蛋白。帶有高風險基因型易使轉<br>
              化作用無法順利進行，不被肝臟代謝，<br>
              造成血脂異常。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">LPL</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[62][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[62][3].'</div>';
                //echo $genotype[62][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">LIPC</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[63][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[63][3].'</div>';
                //echo $genotype[63][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CETP</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[64][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[64][3].'</div>';
                //echo $genotype[64][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">APOE</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[61][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[61][3].'</div>';
                //echo $genotype[61][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">協助血脂運送及辨識：</li>
            <li style="font-weight: 100;">
                膽固醇和三酸甘油脂是透過載脂蛋白運<br>
                送到體內各組織器官運用。帶有高風險<br>
                基因型易使載脂蛋白的運送功能產生缺<br>
                失，使血脂異常。
            </li>
          </ul>
        </th>

      <td style="font-weight: 300;">APOB</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[59][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[59][3].'</div>';
                //echo $genotype[59][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">APOA5</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[60][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[60][3].'</div>';
                //echo $genotype[60][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">16</p>


</div>
</div>


<br>
<br>


<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">高尿酸血症</font>
      </th>

      <th align="center" scope=col style = "width: 185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>




    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>高尿酸血症是導致痛風的主要因素，有高尿酸血症的病人，未來5-10%<br>
              的人會發展成痛風。
          </li>
          <li>血中尿酸值大於7.0 mg/dL 為高尿酸血症，如果合併某些代謝異常的<br>
              共病症，如高血壓、肥胖、以及高血脂等，將提高痛風的發生率。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 300;">男性</font>
        <font size="6" color = "#5DADE2">21.9%</font>
        <br>
        <font style = "font-weight: 300;">女性</font>
        <font size="6" color = "#5DADE2">9.8% &nbsp&nbsp</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "8" style="font-weight: 400;">
        <font color = "#5DADE2">高尿酸<br>血症</font>
      </th>


      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">尿酸排出的調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型在腎臟或腸道排除尿<br>
              酸的功能異常，導致尿酸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ALPK1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[13][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[13][3].'</div>';
                //echo $genotype[13][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MAOA-1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[15][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[15][3].'</div>';
                //echo $genotype[15][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MAOA-2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[16][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[16][3].'</div>';
                //echo $genotype[16][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ABCG2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[18][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[18][3].'</div>';
                //echo $genotype[18][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響腎臟再吸收尿酸的效率：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使得腎臟對於尿酸<br>
              的再吸收效率過快，導致血液中尿酸濃<br>
              度增加。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">GLUT9</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[17][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[17][3].'</div>';
                //echo $genotype[17][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">hURAT1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[20][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[20][3].'</div>';
                //echo $genotype[20][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">SLC2A9</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[19][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[19][3].'</div>';
                //echo $genotype[19][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
        <th rowspan = "1">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">高尿酸易感基因：</li>
            <li style="font-weight: 100;">
                帶有高風險基因型可能因尿酸代謝異常<br>
                而影響尿酸在體內的濃度水平。
            </li>
          </ul>
        </th>

        <td style="font-weight: 300;">GCKR</td>
        <td>
          <font color = "#9d9e9e">
            GG
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[14][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[14][3].'</div>';
                  //echo $genotype[14][2];
            ?>
          </font>
        </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">17</p>

</div>
</div>

<br>
<br>


<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_title" >
   <table class="table_disease_tile_left">


    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">冠狀動脈疾病</font>
      </th>

      <th align="center" scope=col style = "width: 185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>




    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>冠狀動脈是輸送血液及氧氣到心臟的血管，當血管狹窄或阻塞造成心臟<br>
              缺氧的現象即屬冠狀動脈疾病；臨床上會出現胸痛或胸悶的症狀，也就<br>
              是心絞痛或狹心症。
          </li>
          <li>男性的罹患率為女性的4倍、但婦女於停經後罹患率會升高。</li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">2%~4%</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "10" style="font-weight: 400;">
        <font color = "#5DADE2">冠狀動<br>脈疾病</font>
      </th>




      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響血脂代謝與血管內皮細胞的通透性：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易出現低密度脂蛋白<br>
              膽固醇的聚積，使血管變狹窄而影響血<br>
              流的流暢度，且可能誘發血管內皮細胞<br>
              的發炎反應，造成內皮細胞變性而影響<br>
              通透性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">APOE</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[33][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[33][3].'</div>';
                //echo $genotype[33][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">FADS1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[35][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[35][3].'</div>';
                //echo $genotype[35][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">NFKBIL1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[38][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[38][3].'</div>';
                //echo $genotype[38][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PSMA6</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[40][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[40][3].'</div>';
                //echo $genotype[40][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫發炎反應：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易促使發炎相關基因<br>
              表現，進而一連串的誘發反應影響動脈<br>
              粥狀硬化的生成或惡化。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">BRAP</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[31][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[31][3].'</div>';
                //echo $genotype[31][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HFE</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[32][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[32][3].'</div>';
                //echo $genotype[32][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">LTA-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[36][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[36][3].'</div>';
                //echo $genotype[36][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">LTA-2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[37][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[37][3].'</div>';
                //echo $genotype[37][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">調節血管收縮的作用：</li>
            <li style="font-weight: 100;">
                帶有高風險基因型易造成體內血管收縮<br>
                素的含量及作用失衡，對於已經狹窄的<br>
                血管壁會因收縮異常而增加血管堵塞的<br>
                危險性。
            </li>
          </ul>
        </th>

        <td style="font-weight: 300;">AGTR1</td>
        <td>
          <font color = "#9d9e9e">
            AA
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[34][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[34][3].'</div>';
                  //echo $genotype[34][2];
            ?>
          </font>
        </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">BAT1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[39][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[39][3].'</div>';
                //echo $genotype[39][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">18</p>

</div>
</div>
<br>
<br>

<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">心房顫動</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>心房顫動是一種因為心臟內產生節律訊號的功能異常，導致心跳不規則<br>
              且經常過快的病症。罹患心房顫動可能不會有任何症狀，但也可能會出<br>
              現心悸、頭暈、疲倦、胸悶或喘不過氣等症狀。
          </li>
          <li>台灣的心房顫動病人發生中風的風險是一般人的8~10倍。</li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">全人口中</font>
        <br>
        <font size="6" color = "#5DADE2">1%</font>
        <br>
        <font style = "font-weight: 300;">隨年齡增加比例愈高
        <br>
        60歲以上 4%
        <br>
        80歲以上 10%</font>
      </td>

    </tr>

  </table>


</div>



<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "4" style="font-weight: 400;">
        <font color = "#5DADE2">心房<br>顫動</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">心臟發育相關：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型在心臟發育過程可能<br>
              出現調控失衡，進而造成心房顫動的發<br>
              生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ZFHX3</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[43][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[43][3].'</div>';
                //echo $genotype[43][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與訊息傳導：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易使細胞內鈣離子濃<br>
              度持續上升，造成心房顫動。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">AGT</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[44][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[44][3].'</div>';
                //echo $genotype[44][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">鉀離子通道調控蛋白：</li>
            <li style="font-weight: 100;">
                鉀離子通道調控蛋白參與心房肌電生理<br>
                功能之正常運作。帶有高風險基因型可<br>
                能使鉀離子通道活性失衡而引起心房顫<br>
                動的發生。
            </li>
          </ul>
        </th>

        <td style="font-weight: 300;">KCNN3</td>
        <td>
          <font color = "#9d9e9e">
            CC
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[41][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[41][3].'</div>';
                  //echo $genotype[41][2];
            ?>
          </font>
        </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">KCNE1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[42][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[42][3].'</div>';
                //echo $genotype[42][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>


   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">19</p>

</div>
</div>

<br>
<br>


<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_title">
   <table class="table_disease_tile_left">

     <tr>
       <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
         <font size="4">腦中風</font>
       </th>

       <th align="center" scope=col style="width:185px; font-weight: 400;">
         <font size="4">盛行率</font>
       </th>
     </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>腦中風常常是急性發作，是指腦部血管發生病變，以致血管突然破裂(腦內<br>
              出血)或堵塞(腦梗塞)，使腦部功能缺損，若不及時接受有效的醫治，將會<br>
              導致中至重度殘障。
          </li>
          <li>2018年腦中風佔台灣地區死亡原因的第四位。中風後患者之肢體殘障及言<br>
              語問題，需人長期照顧，是成人殘障的第一號殺手。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">36歲以上</font>
        <br>
        <font size="6" color = "#5DADE2">1.64%</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
        <font color = "#5DADE2">腦中風</font>
      </th>



      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與脂質代謝、運送及辨識：</li>
          <li style="font-weight: 100;">
              動脈狹窄是造成梗塞性腦中風的重要原<br>
              因，帶有高風險基因型加速頸動脈膽固<br>
              醇等脂肪物質在血管內壁積聚，導致血<br>
              管變窄或完全阻塞不通。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ZNF650</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[45][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[45][3].'</div>';
                //echo $genotype[45][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">FGFR4</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[47][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[47][3].'</div>';
                //echo $genotype[47][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">腦血管壁承受壓力的調節：<li>
          <li style="font-weight: 100;">
              當帶有高風險基因型，血管壁承受壓力<br>
              能力較差；腦血管容易因血壓上升時，<br>
              產生血管破裂而導致腦出血。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">KCNK17</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[48][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[48][3].'</div>';
                //echo $genotype[48][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">AGT</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[46][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[46][3].'</div>';
                //echo $genotype[46][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">COL1A2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[49][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[49][3].'</div>';
                //echo $genotype[49][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">20</p>

</div>
</div>

<br>
<br>


<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_title">
   <table class="table_disease_tile">

     <tr>
       <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
         <font size="4">靜脈曲張</font>
       </th>

       <th align="center" scope=col style="width:185px; font-weight: 400;">
         <font size="4">盛行率</font>
       </th>
     </tr>

    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>靜脈曲張為靜脈血管受到非正常血液的長期壓迫，造成管內瓣膜功能受<br>
              損，使得血管內積壓過量血液，導致血管壁變薄及血管突出。外部表現<br>
              通常為突出的靜脈，內部表現為血栓的形成。為不可恢復的反應。
          </li>
          <li>此疾病成因目前認為與久站、遺傳、懷孕、過胖、先天性瓣膜異常有關。</li>
        </ul>
      </td>


      <td align = "center">
          <font style = "font-weight: 300;">男性 </font>
          <font size="6" color = "#5DADE2">10%~20%</font>
          <br>
          <font style = "font-weight: 300;">女性 </font>
          <font size="6" color = "#5DADE2">25%~33%</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "3" style="font-weight: 400;">
        <font color = "#5DADE2">靜脈<br>曲張</font>
      </th>



      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響血管新生：</li>
          <li style="font-weight: 100;">
              帶有高風險基因，代表會影響血管內皮<br>
              層細胞不穩定性增加，使血管內皮層細<br>
              胞移動與增生增加，促進血管新生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTHFR-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[449][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[449][3].'</div>';
                //echo $genotype[449][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">MTHFR-2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[450][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[450][3].'</div>';
                //echo $genotype[450][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響血液循環：<li>
          <li style="font-weight: 100;">
              帶有高風險基因，會影響血液累積在血<br>
              管，導致血管壁變薄。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">HFE</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[448][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[448][3].'</div>';
                //echo $genotype[448][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">21</p>

</div>
</div>

<br>
<br>


<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>

<div class="disease_title">
   <table class="table_disease_tile_left">

     <tr>
       <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
         <font size="4">晚發型阿茲海默症</font>
       </th>

       <th align="center" scope=col style="width:185px; font-weight: 400;">
         <font size="4">盛行率</font>
       </th>
     </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>阿茲海默症是最常見的失智症，是一種不可逆、漸進性中樞神經退化的<br>
              腦部疾病。由於疾病的成因至今尚未完全明白，目前的治療只能延緩退<br>
              化速度，並無法治癒。
          </li>
          <li>絕大多數的阿茲海默症屬於晚發型，通常發生在65歲以後，發病初期會<br>
              有注意力無法集中、早醒、短期記憶力退化現象，持續進展則出現智力<br>
              退化、認知退化、失去生活能力、死亡。
          </li>
        </ul>
      </td>


      <td align = "center">
          <font style = "font-weight: 400;">60歲以上的人口約</font>
          <br>
          <font size="6" color = "#5DADE2">4%~5%</font>
          <br>
          <font style = "font-weight: 300;">隨年齡增加罹病的比例
          <br>
          愈高，每增加10歲盛行
          <br>
          率變兩倍</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
        <font color = "#5DADE2">晚發型<br>阿茲海<br>默症</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">神經元的活性調節:</li>
          <li style="font-weight: 100;">
              帶有高風險基因型可能使星形膠質細胞<br>
              的生長及修復功能變異，進而對細胞信<br>
              號傳導及神經元活性產生影響。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">APOE</td>
      <td>
        <font color = "#9d9e9e">
          E2/E2<br>E2/E3<br>E3/E3
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php
                $alz_gene = $genotype[94][3].$genotype[95][3];

                if ($alz_gene == 'TTTT'){
                  $alz_type = 'E2/E2';
                  $alz_risk = 0.620330863668242;

                } elseif ($alz_gene == 'CTTT') {
                  $alz_type = 'E2/E3';
                  $alz_risk = 0.620330863668242;

                } elseif ($alz_gene == 'CCTT') {
                  $alz_type = 'E3/E3';
                  $alz_risk = 0.620330863668242;

                } elseif ($alz_gene == 'CTCT') {
                  $alz_type = 'E2/E4';
                  $alz_risk = 1.944320617467630;

                } elseif ($alz_gene == 'CCCT') {
                  $alz_type = 'E3/E4';
                  $alz_risk = 2.851670238952520;

                } elseif ($alz_gene == 'CCCC') {
                  $alz_type = 'E4/E4';
                  $alz_risk = 10.841902109783800;

                }

                echo '<div style="Color:'.(($alz_risk > 1) ? $color_highrisk : $color_lowrisk).'">'.$alz_type.'</div>';
                //echo $genotype[94][2].$genotype[95][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">SLC2A14</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[98][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[98][3].'</div>';
                //echo $genotype[98][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">GAB2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[96][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[96][3].'</div>';
                //echo $genotype[96][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">調控神經元的代謝：<li>
          <li style="font-weight: 100;">
              帶有高風險基因容易形成神經纖維糾結<br>
              及神經元外形成斑塊樣的團塊堆積，造<br>
              成神經細胞內的運送系統崩壞，進而導<br>
              致神經細胞死亡。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MS4A6A</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[97][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[97][3].'</div>';
                //echo $genotype[97][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">GSK3B</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[99][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[99][3].'</div>';
                //echo $genotype[99][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>


   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">22</p>

</div>
</div>

<br>
<br>



<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">帕金森氏症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>帕金森氏症是老年人的三大腦病之一，通常患者是在50~60歲發病，而<br>
              診斷時的平均年齡是60歲。
          </li>
          <li>帕金森氏症是一種慢性的中樞神經系統退化性失調，它會損害患者的動<br>
              作技能、語言能力以及其他功能。主要症狀有：(一)四肢顫抖 (二)四肢<br>
              僵硬 (三)動作遲緩，這種病症會逐漸惡化，大約五到十年內可能會殘障。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">60歲以上的人口<br>
        約 </font>
        <font size="6" color = "#5DADE2">1%</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">帕金<br>森氏症</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">神經元的存活及發育：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會因為生長因子、轉<br>
              錄調控、DNA甲基化等作用失衡，影響<br>
              神經元的存活及發育。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">LRRK2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[107][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[107][3].'</div>';
                //echo $genotype[107][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">GSK3b</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[108][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[108][3].'</div>';
                //echo $genotype[108][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MTHFR</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[103][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[103][3].'</div>';
                //echo $genotype[103][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">神經元蛋白質的代謝：<li>
          <li style="font-weight: 100;">
              帶有高風險基因會造成α-synuclein<br>
              蛋白質的結構異常而無法被正常代謝，<br>
              造成過量累積，導致神經細胞毒性及死<br>
              亡。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">SNCA-1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[104][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[104][3].'</div>';
                //echo $genotype[104][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">SNCA-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[105][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[105][3].'</div>';
                //echo $genotype[105][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">MAPT</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[100][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[100][3].'</div>';
                //echo $genotype[100][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">GAK</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[101][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[101][3].'</div>';
                //echo $genotype[101][2];
          ?>
        </font>
      </td>
    </tr>




     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫調節相關：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會引起過度發炎反應<br>
              ，會使得腦部神經細胞持續損傷。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TNF-α</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[106][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[106][3].'</div>';
                //echo $genotype[106][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HLA</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[102][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[102][3].'</div>';
                //echo $genotype[102][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>


   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">23</p>

</div>
</div>


<br>
<br>


<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>

<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">退化性關節炎</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>退化性關節炎是人類關節疾病中最普遍的一種，跟年齡老化有直接的關<br>
              聯。主要的症狀是疼痛、僵硬、腫大和變形，在活動關節時，常可聽到<br>
              不正常的摩擦聲響。
          </li>
          <li>較早期的症狀包含膝部酸痛無力，硬緊不靈活，蹲下後不易站起來。症<br>
              狀加重時，則出現蹲下疼痛有困難，膝關節漸變形無法走遠路，夜裏睡<br>
              覺時膝部會酸痛，步態左右搖擺，需要他人幫忙。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">50歲以上 </font>
        <font size="6" color = "#5DADE2">7%</font>
        <br>
        <font style = "font-weight: 400;">60歲以上 </font>
        <font size="6" color = "#5DADE2">11%</font>
        <br>
        <font style = "font-weight: 300;">女性罹患率是男性的2倍</font>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">退化性<br>關節炎</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響軟骨細胞的生成作用：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會出現軟骨細胞對生<br>
              長因子的作用能力下降，進而減少膠原<br>
              蛋白和軟骨的生成量，增加退化性關節<br>
              炎的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">DVWA</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[118][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[118][3].'</div>';
                //echo $genotype[118][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">GDF5</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[119][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[119][3].'</div>';
                //echo $genotype[119][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">LPAR1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[120][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[120][3].'</div>';
                //echo $genotype[120][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">SMAD3</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[121][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[121][3].'</div>';
                //echo $genotype[121][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與軟骨組織的代謝調控：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型容易出現發炎反應或<br>
              分解軟骨的酵素活性過高，使關節的軟<br>
              骨受到破壞，增加退化性關節炎的發生<br>
              。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ADAMTS5</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[117][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[117][3].'</div>';
                //echo $genotype[117][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TLR3</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[122][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[122][3].'</div>';
                //echo $genotype[122][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center" >
      <td style="font-weight: 300;">IL1B-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[123][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[123][3].'</div>';
                //echo $genotype[123][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL1B-2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[124][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[124][3].'</div>';
                //echo $genotype[124][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">TNF-α</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[116][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[116][3].'</div>';
                //echo $genotype[116][2];
          ?>
        </font>
      </td>
    </tr>


  </table>

  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>


   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">24</p>

</div>
</div>

<br>
<br>



<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>

 <div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">骨質疏鬆</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>




    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>骨質疏鬆症為一種全身骨骼疾病，其特徵包含骨量減少、骨組織的顯微<br>
              結構變差，造成骨骼脆弱，骨折危險性增高。目前臨床上主要根據骨密<br>
              度測量值診斷骨質疏鬆症。
          </li>
          <li>骨質疏鬆症多數情況下並不會直接導致死亡，但發生骨折機會提高，從<br>
              而影響病患的健康和獨立生活的能力。
          </li>
        </ul>
      </td>


      <td align = "center">
          <font style = "font-weight: 400;">50歲以上</font>
          <br>
          <font style = "font-weight: 300;">男性 </font>
          <font size="5.5" color = "#5DADE2">1.6%</font>
          <br>
          <font style = "font-weight: 300;">女性</font>
          <font size="5.5" color = "#5DADE2">11.4%</font>
          <br>
          <font style = "font-weight: 300;">(停經後婦女骨質疏鬆
          <br>
          盛行率30%)</font>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">骨質<br>疏鬆</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響骨骼中膠原蛋白生成：<li>
          <li style="font-weight: 100;">
              骨骼內需要膠原蛋白讓鈣離子和骨細胞<br>
              能更緊密地結合。帶有高風險基因型易<br>
              出現膠原蛋白生成降低，使鈣質容易流<br>
              失，骨質密度下降。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ALDH7A1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[109][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[109][3].'</div>';
                //echo $genotype[109][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MTHFR</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[110][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[110][3].'</div>';
                //echo $genotype[110][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">促進骨骼再吸收作用：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會呈現蝕骨細胞活性<br>
              增加、造骨細胞活性降低，導致體內骨<br>
              骼密度減少。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ESRa</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[111][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[111][3].'</div>';
                //echo $genotype[111][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ESR1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[112][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[112][3].'</div>';
                //echo $genotype[112][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">SOST</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[113][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[113][3].'</div>';
                //echo $genotype[113][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">VDR</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[114][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[114][3].'</div>';
                //echo $genotype[114][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">骨骼生成速率降低：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會導致造骨細胞發育<br>
              受到抑制，進而減少骨骼生成，增加骨<br>
              質疏鬆症可能性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">GREM2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[115][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[115][3].'</div>';
                //echo $genotype[115][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

      <br>
      <hr>
      <p style="font-weight: 300;" align = "center">25</p>

   </div>
 </div>
<br>
<br>



<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>

<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">肌少症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>肌少症顧名思義，即為骨骼肌的流失，被認為是老年病症候群的表現之<br>
              一。
          </li>
          <li>肌少症患者在生理與疾病上有許多不良影響，包含失能、較差的下肢功<br>
              能、代謝症候群、心血管風險等。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">60歲以上約 </font>
        <font size="6" color = "#5DADE2">6.8%</font></li>
        <br>
        <font style = "font-weight: 300;">其盛行率隨年紀而增加</font>
      </td>
    </tr>

  </table>


</div>





<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "4" style="font-weight: 400;">
        <font color = "#5DADE2">肌少症</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">身體肌肉質量：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型，在肌肉形成上的關<br>
              鍵因子肌動蛋白的強度上與肌肉彈性會<br>
              有減少，可能造成肌肉質量減少。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ACTN3</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[416][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[416][3].'</div>';
                //echo $genotype[416][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">COL1A1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[417][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[417][3].'</div>';
                //echo $genotype[417][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">身體肌肉強度：<li>
          <li style="font-weight: 100;">
              帶有高風險基因，代表在細胞接收維他<br>
              命D的能力減少，會影響肌肉細胞粒線<br>
              體活性，可能降低肌肉強度。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">VDR-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[418][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[418][3].'</div>';
                //echo $genotype[418][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">VDR-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[419][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[419][3].'</div>';
                //echo $genotype[419][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">26</p>

</div>
</div>

<br>
<br>



<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



 <div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">類風濕性關節炎</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>類風濕性關節炎，是一種由自身免疫障礙引致免疫系統攻擊自己體內的<br>
              正常組織，通常是從關節組織開始侵犯，尤其是手部關節。
          </li>
          <li>長期的慢性炎症會造成關節變形直至殘廢，並會因關節痛楚及磨損而失<br>
              去部分的活動能力。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">0.4%</font>
        <br>
        <font style = "font-weight: 300;">女性罹患率是
        <br>
        男性2~3倍</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "8" style="font-weight: 400;">
        <font color = "#5DADE2">類風<br>濕性<br>關節炎</font>
      </th>



      <th rowspan = "8">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：<li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CTL4</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[73][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[73][3].'</div>';
                //echo $genotype[73][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">HLA</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[74][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[74][3].'</div>';
                //echo $genotype[74][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PADI4</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[75][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[75][3].'</div>';
                //echo $genotype[75][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">FCRL3</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[76][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[76][3].'</div>';
                //echo $genotype[76][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CD244-1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[77][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[77][3].'</div>';
                //echo $genotype[77][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CD244-2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[78][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[78][3].'</div>';
                //echo $genotype[78][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IRAK1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[79][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[79][3].'</div>';
                //echo $genotype[79][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">APOM</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[80][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[80][3].'</div>';
                //echo $genotype[80][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">27</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">紅斑性狼瘡</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>是一種慢性發炎性疾病，可能侵犯皮膚、關節、腎臟、肺臟、神經系統<br>
              及其他器官或系統，任何年齡的人都可能得到紅斑性狼瘡，但通常發生<br>
              於20~40歲年輕女性。
          </li>
          <li>以發生的頻率來說，約90%以上的人會關節痛或關節炎，70~80%的人有<br>
              皮膚紅斑或盤狀紅斑，40~50%有肋膜炎或心包膜炎，40~50%的患者會<br>
              發生狼瘡腎炎，20~60%患者有中樞神經侵犯，約60%患者有白血球低下<br>
              ，20%患者有血小板低下。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">0.06%</font>
        <br>
        <font style = "font-weight: 300;">女性罹患率是
        <br>
        男性8.5倍</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "8" style="font-weight: 400;">
        <font color = "#5DADE2">紅斑<br>性狼瘡</font>
      </th>



      <th rowspan = "8">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：<li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成血<br>
              管及結締組織炎症。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IRF5</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[81][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[81][3].'</div>';
                //echo $genotype[81][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">ITPR3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[82][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[82][3].'</div>';
                //echo $genotype[82][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TNXB</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[83][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[83][3].'</div>';
                //echo $genotype[83][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">STAT4</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[84][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[84][3].'</div>';
                //echo $genotype[84][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CD40</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[85][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[85][3].'</div>';
                //echo $genotype[85][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">AFF3</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[86][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[86][3].'</div>';
                //echo $genotype[86][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TNFAIP3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[87][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[87][3].'</div>';
                //echo $genotype[87][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ITGAM</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[88][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[88][3].'</div>';
                //echo $genotype[88][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">28</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">自體免疫甲狀腺疾病</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>是由血液中不正常的高濃度抗甲狀腺抗體，造成甲狀腺細胞發炎破壞，<br>
              病程及嚴重程度因人而異。發病早期大部分病人症無症狀，少數會出現<br>
              甲狀腺功能亢進，晚期約10%患者會出現甲狀腺功能低下，影響全身器<br>
              官。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">0.8~1.2%</font>
        <br>
        <font style = "font-weight: 300;">女性罹患率是
        <br>
        男性8~9倍</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
        <font color = "#5DADE2">自體免<br>疫甲狀<br>腺疾病</font>
      </th>



      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：<li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，進而引<br>
              起長期的甲狀腺發炎。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TNF-α</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[92][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[92][3].'</div>';
                //echo $genotype[92][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">CTL4</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[89][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[89][3].'</div>';
                //echo $genotype[89][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">VDR</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[93][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[93][3].'</div>';
                //echo $genotype[93][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">TSHR-1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[90][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[90][3].'</div>';
                //echo $genotype[90][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TSHR-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[91][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[91][3].'</div>';
                //echo $genotype[91][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">29</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">僵直性脊椎炎</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>是一種慢性全身性疾病，臨床症狀是背痛、僵硬和疲勞，有些病患症狀<br>
              會好，有些有持續性脊椎疾病和脊椎以外症狀，例如眼睛虹膜炎、心瓣<br>
              膜炎、心傳導系統障礙、大動脈瓣膜炎...等。好發於男性20歲至40歲<br>
              比例高於女性，且男性之脊椎病變較嚴重。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">0.2%</font>
        <br>
        <font style = "font-weight: 300;">男性罹患率是
        <br>
        女性2.7倍</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "4" style="font-weight: 400;">
        <font color = "#5DADE2">僵直性<br>脊椎炎</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：<li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，以致脊<br>
              椎韌帶和中軸關節自體發炎，與關節軟<br>
              組織（包括：軟骨、韌帶、肌腱）的硬<br>
              化及鈣化有關聯。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ANKH</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[69][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[69][3].'</div>';
                //echo $genotype[69][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">PDCD</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[70][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[70][3].'</div>';
                //echo $genotype[70][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ERAP1-1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[71][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[71][3].'</div>';
                //echo $genotype[71][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">2q51</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[72][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[72][3].'</div>';
                //echo $genotype[72][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">30</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">肝硬化</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>肝臟細胞、組織及血管受到病毒、酒精或其它因素破壞，使肝臟產生纖<br>
              維化及結節，稱為肝硬化。肝硬化是不可逆的，除非是接受肝臟移植，<br>
              否則情形是無法好轉。
          </li>
          <li>肝硬化可怕的地方在於它的併發症：食道靜脈曲張、肝昏迷(肝性腦病<br>
              變)、腹水(有時併發腹膜炎)，同時肝硬化的病人，有機會會轉變成為<br>
              肝癌。
          </li>
          <li>造成肝硬化的原因，在台灣以B型肝炎及C型肝炎為主要元凶，尤其B肝<br>
              約佔70~80%，C肝約佔10~20%。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 300;">B肝 </font>
        <font size="6" color = "#5DADE2">17.3%</font>
        <br>
        <font style = "font-weight: 300;">C肝 </font>
        <font size="6" color = "#5DADE2">4.4%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">肝硬化</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響肝細胞生長：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型之肝纖維組織與再生<br>
              結節細胞的生長調控呈現異常，使得肝<br>
              臟變硬，導致肝硬化。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ALDH2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[155][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[155][3].'</div>';
                //echo $genotype[155][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">miR-146a</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[149][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[149][3].'</div>';
                //echo $genotype[149][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ESR1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[150][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[150][3].'</div>';
                //echo $genotype[150][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">TRPM5</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[151][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[151][3].'</div>';
                //echo $genotype[151][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，引起肝臟<br>
              長期發炎與壞死。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">PTGS2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[147][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[147][3].'</div>';
                //echo $genotype[147][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MIF</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[148][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[148][3].'</div>';
                //echo $genotype[148][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">GRP78</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[152][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[152][3].'</div>';
                //echo $genotype[152][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">HLA-DP</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[153][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[153][3].'</div>';
                //echo $genotype[153][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;" >IL-8</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[154][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[154][3].'</div>';
                //echo $genotype[154][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">31</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">脂肪肝</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>肝臟內的脂肪過量堆積。當經常攝入過量的高脂飲食或當肝細胞受損傷(<br>
              如藥物、嗜酒、病毒性肝炎等引起)而不能夠發揮正常脂肪的代謝功能時<br>
              ，使肝細胞內的脂肪儲量逐漸增多，形成脂肪肝。
          </li>
          <li>一般的脂肪肝大都屬於良性疾病，不會引起肝硬化或肝癌，但若長期酗<br>
              酒引起的脂肪肝，則會使肝臟受損，最後仍可能發展成肝硬化。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">成人約</font>
        <br>
        <font size="6" color = "#5DADE2">30%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">脂肪肝</font>
      </th>




      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響肝臟脂質合成：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型易發生肝細胞內脂質<br>
              合成的調控路徑異常，引起脂肪堆積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">PNPLA3</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[156][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[156][3].'</div>';
                //echo $genotype[156][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">GCKR</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[159][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[159][3].'</div>';
                //echo $genotype[159][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PPARG</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[160][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[160][3].'</div>';
                //echo $genotype[160][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">AGTR1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[164][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[164][3].'</div>';
                //echo $genotype[164][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">FABP1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[162][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[162][3].'</div>';
                //echo $genotype[162][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與脂質運送及辨識：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型易使肝內運脂蛋白作<br>
              用異常，導致脂質堆積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTP-1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[157][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[157][3].'</div>';
                //echo $genotype[157][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">MTP-2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[158][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[158][3].'</div>';
                //echo $genotype[158][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">LIPC</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[163][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[163][3].'</div>';
                //echo $genotype[163][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使肝細胞產生慢性<br>
              發炎反應，長期對於反覆的脂肪變性、<br>
              壞死和再生造成影響，嚴重者亦可能進<br>
              展成肝臟纖維化。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">PTGS2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[161][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[161][3].'</div>';
                //echo $genotype[161][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">32</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">膽石症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>膽石症是包含結石發生在肝內膽管或膽囊或膽總管，是最常見的膽道疾<br>
              病。
          </li>
          <li>膽結石可能無症狀，但也可能會引發不適，初始症狀會產生上腹部的發<br>
              脹、噁心、嘔吐等現象，發作時則是劇烈的上腹部疼痛、黃疸，有時會<br>
              有發燒症狀。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">5~10%</font>
        <br>
        <font style = "font-weight: 300;">(大於50歲：11.25%;
        <br>
        大於65歲：15%~20%)</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">膽石症</font>
      </th>


      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響膽汁內膽固醇的代謝：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易出現膽固醇代謝失<br>
              調，影響膽汁中膽鹽、卵磷脂和膽固醇<br>
              三者之間的比例，容易形成膽固醇結晶<br>
              ，進而導致膽結石。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ABCG8</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[165][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[165][3].'</div>';
                //echo $genotype[165][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">APOE</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[166][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[166][3].'</div>';
                //echo $genotype[166][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響膽汁中的水份含量：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會有膽汁水分含量異<br>
              常狀況，造成膽汁容易產生結晶，導致<br>
              膽結石。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MUPCDH</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[167][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[167][3].'</div>';
                //echo $genotype[167][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "6">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響膽道上皮細胞的免疫調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型出現異常發炎反應，<br>
              促使膽囊的表皮細胞死亡，這些死亡脫<br>
              落的細胞會吸附膽固醇，於是造成膽結<br>
              石。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IL8RB</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[171][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[171][3].'</div>';
                //echo $genotype[171][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">RNASEL</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[172][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[172][3].'</div>';
                //echo $genotype[172][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL8-1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[168][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[168][3].'</div>';
                //echo $genotype[168][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL8-2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[169][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[169][3].'</div>';
                //echo $genotype[169][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">IL8-3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[170][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[170][3].'</div>';
                //echo $genotype[170][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">NOS2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[173][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[173][3].'</div>';
                //echo $genotype[173][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">33</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">消化性潰瘍、胃食道逆流</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>消化性潰瘍屬於慢性、具復發性的疾病，主要包含十二指腸潰瘍及胃潰<br>
              瘍，上腹疼痛是最常見的臨床症狀。
          </li>
          <li>胃食道逆流是因胃食道和胃部上方連接處的賁門無法正常運作，導致胃<br>
              酸、消化酵素和胃裡面的食物逆流到食道，造成食道黏膜發炎。典型的<br>
              症狀有心口灼熱感(火燒心)、胃酸逆流感(溢酸)。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">10~15%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "6" style="font-weight: 400;">
        <font color = "#5DADE2">消化性<br>潰瘍、<br>胃食道<br>逆流</font>
      </th>



      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節： </li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，對於消化<br>
              道黏膜的功能維持及修復能力產生影響<br>
              ，提高消化性潰瘍及胃食道逆流的可能<br>
              性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IL-6</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[181][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[181][3].'</div>';
                //echo $genotype[181][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL1B-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[182][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[182][3].'</div>';
                //echo $genotype[182][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL1B-2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[183][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[183][3].'</div>';
                //echo $genotype[183][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL17A</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[185][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[185][3].'</div>';
                //echo $genotype[185][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">IL8</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[184][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[184][3].'</div>';
                //echo $genotype[184][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響黏膜分泌：</li>
          <li style="font-weight: 100;">
              參與醣蛋白(Glycoprotein)之合成調節。<br>
              帶有高風險基因型易發生黏膜分泌異常<br>
              ，增加消化性潰瘍、胃食道逆流的發<br>
              生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">PSCA</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[180][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[180][3].'</div>';
                //echo $genotype[180][2];
          ?>
        </font>
      </td>
    </tr>





  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">34</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">大腸息肉症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>息肉是一個生長在大腸之腸壁內的腫瘤組織，有些息肉（例如：增生性<br>
              息肉）不會變<成癌症，但是有些息肉（例如：腺性息肉）會變成癌症。<br>
              大部分的大腸直腸息肉是沒有症狀的，偶爾會有腹痛、大便習慣改變、<br>
              便血或便秘等非特異性的症狀。
          </li>
          <li>腺性息肉發生癌化情形與息肉大小及形狀及家族史有關，息肉一旦有病<br>
              理變化或已有早期癌化即需切除。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">50歲成人</font>
        <br>
        <font size="6" color = "#5DADE2">5~10%</font>
        <br>
        <font style = "font-weight: 400;">70歲以上</font>
        <br>
        <font size="6" color = "#5DADE2">50%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">大腸<br>息肉症</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用： </li>
          <li style="font-weight: 100;">
              帶有高風險基會使體內發炎反應調控失<br>
              衡，反覆發生大腸炎，導致息肉產生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CRP-1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[187][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[187][3].'</div>';
                //echo $genotype[187][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">CRP-2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[188][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[188][3].'</div>';
                //echo $genotype[188][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">VEGF</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[186][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[186][3].'</div>';
                //echo $genotype[186][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">毒物代謝相關：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易使大腸毒物代謝能<br>
              力下降，腸道毒物的累積導致大腸息肉<br>
              症。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CYP7A1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[189][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[189][3].'</div>';
                //echo $genotype[189][2];
          ?>
        </font>
      </td>
    </tr>




    <tr align = "center" >
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響DNA修復的能力:</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會出現鹼基修復路徑<br>
              (BER pathway)異常，提高細胞發生病<br>
              變的機率。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MYH-1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[190][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[190][3].'</div>';
                //echo $genotype[190][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">MYH-2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[191][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[191][3].'</div>';
                //echo $genotype[191][2];
          ?>
        </font>
      </td>
    </tr>





    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與訊息調控的腫瘤抑制基因：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使細胞Wnt訊息傳<br>
              遞路徑調控異常，導致細胞癌化。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">APC-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[192][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[192][3].'</div>';
                //echo $genotype[192][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">35</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">胰臟炎</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>可分為急性胰臟炎與慢性胰臟炎。疾病發生原因包含阻塞性、酒精性、<br>
              藥物、抽煙、代謝性、外傷性、感染性、懷孕、家族遺傳、自體免疫及<br>
              其他不明性原因。慢性胰臟炎嚴重時可能併發胰臟癌。
          </li>
          <li>一般的發生年齡約為40~60歲。男性酒精性胰臟炎較女性多。</li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">膽結石和喝酒約佔</font>
        <br>
        <font size="6" color = "#5DADE2">70~80%</font>
        <br>
        <font style = "font-weight: 300;">男性發生率是
        <br>
        女性的3倍
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "4" style="font-weight: 400;">
        <font color = "#5DADE2">胰臟炎</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">發炎反應：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成胰臟細胞較容易誘發發<br>
              炎反應導致胰臟炎。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CCL2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[451][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[451][3].'</div>';
                //echo $genotype[451][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL-1β</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[452][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[452][3].'</div>';
                //echo $genotype[452][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">IL-8</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[453][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[453][3].'</div>';
                //echo $genotype[453][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL-10</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[454][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[454][3].'</div>';
                //echo $genotype[454][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">36</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">白內障</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>白內障是因水晶體混濁，導致視力障礙的一種疾病。最常見的白內障是<br>
              因老化形成，年齡是最重要的單一危險因子。女性比男性更常罹患白內<br>
              障。
          </li>
          <li>白內障早期的症狀可能有視力模糊、色調改變、怕光、眼前黑點、複視<br>
              、晶體性近視等，晚期症狀則為視力障礙日深，最後只能在眼前辨別手<br>
              指或僅剩下光覺視力。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">65歲以上 </font>
        <br>
        <font size="6" color = "#5DADE2">60%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "4" style="font-weight: 400;">
        <font color = "#5DADE2">白內障</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響DNA修復能力：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響DNA修復功<br>
              能，容易因氧化壓力造成水晶體細胞<br>
              的損傷，長期累積導致白內障的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">OGG1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[125][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[125][3].'</div>';
                //echo $genotype[125][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">XRCC1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[126][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[126][3].'</div>';
                //echo $genotype[126][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">WRN</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[128][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[128][3].'</div>';
                //echo $genotype[128][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響水晶體結構：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易發生水晶體纖維細<br>
              胞彼此連結異常，影響水晶體原有的正<br>
              常結構。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">EPHA2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[127][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[127][3].'</div>';
                //echo $genotype[127][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">37</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>







<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">青光眼</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>青光眼是一群有很多不同病因所造成的疾病，共同特徵是視神經萎縮和<br>
              視野缺損，病理性的眼壓升高是最重要的危險因素之一。
          </li>
          <li>慢性青光眼的病人往往沒有自覺症狀，等到病人發覺視力降低時，多半<br>
              已經是末期，已經萎縮的視神經是無法再生回復，任何治療都只是讓視<br>
              力不要再惡化，或惡化的慢一點，但視力不會有任何進步。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">1.3%</font>
        <br>
        <font style = "font-weight: 400;">40歲以上</font>
        <br>
        <font size="6" color = "#5DADE2">2~2.5%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "6" style="font-weight: 400;">
        <font color = "#5DADE2">青光眼</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">房水的產生和排出調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易發現眼部異常聚積<br>
              彈性纖維，誘發剝脫性青光眼，且影響<br>
              房水(眼球的液體)的正常產出和排出，<br>
              一旦房水排出受阻則造成眼壓升高，壓<br>
              迫視神經。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CDKN2B-1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[139][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[139][3].'</div>';
                //echo $genotype[139][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">CDKN2B-2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[140][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[140][3].'</div>';
                //echo $genotype[140][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">控制正常眼睛發育：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易發現視神經缺陷，<br>
              提高青光眼視神經變性的易感度。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">SIX6</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[138][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[138][3].'</div>';
                //echo $genotype[138][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與細胞生長調控：</li>
          <li style="font-weight: 100;">
              調節眼部纖維血管的新生。帶有高風險<br>
              基因型會因細胞生長分化的調控失常，<br>
              導致周邊虹膜前沾黏並阻礙房水排出，<br>
              引起眼壓升高。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">P53</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[136][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[136][3].'</div>';
                //echo $genotype[136][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TNF-α</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[137][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[137][3].'</div>';
                //echo $genotype[137][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HGF</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[141][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[141][3].'</div>';
                //echo $genotype[141][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">38</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>







<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">黃斑部病變</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>黃斑部病變是一種隨年齡增長，逐漸出現網膜中央部位退化的疾病。視<br>
              覺上漸次出現視物扭曲變形、變大或變小、視力模糊，最終造成視力喪<br>
              失。
          </li>
          <li>年齡與基因遺傳是病情惡化的兩大高危險因子，流行病學的調查發現，<br>
              抽煙的人罹病機會是不抽煙者的2至5倍。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">65歲 </font>
        <font size="6" color = "#5DADE2">6%</font>
        <br>
        <font style = "font-weight: 400;">80歲以上 </font>
        <font size="6" color = "#5DADE2">30%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">黃斑<br>部病變</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響血管增生：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易在黃斑部發現新生<br>
              血管滲水或滲血，積水及滲出物增加導<br>
              致病變。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">VEGF-A</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[135][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[135][3].'</div>';
                //echo $genotype[135][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">HTRA1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[129][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[129][3].'</div>';
                //echo $genotype[129][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">補體系統之免疫調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易引起過度免疫反應<br>
              而破壞黃斑部細胞。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CFH-1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[130][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[130][3].'</div>';
                //echo $genotype[130][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">CFH-2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[131][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[131][3].'</div>';
                //echo $genotype[131][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">C3</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[132][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[132][3].'</div>';
                //echo $genotype[132][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響抗氧化能力：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型之抗氧化能力下降，<br>
              容易受到氧化壓力造成黃斑部細胞的死<br>
              亡。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">GSTP</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[133][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[133][3].'</div>';
                //echo $genotype[133][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ARMS2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[134][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[134][3].'</div>';
                //echo $genotype[134][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">39</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>






<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">高度近視</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>高度近視為近視度數超過600度以上者。
          </li>
          <li>高度近視代表眼睛提早老化，因此容易併發視網膜剝離、黃斑部退化或<br>
              是白內障等眼科疾病。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">10%</font>
        <font style = "font-weight: 300;"> 以上</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
        <font color = "#5DADE2">高度<br>近視</font>
      </th>



      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響眼軸長度：</li>
          <li style="font-weight: 100;">
              當高風險時，會影響視網膜生長因子，<br>
              造成眼軸增長風險增加，因此高度近視<br>
              風險增加。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TGF-β1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[411][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[411][3].'</div>';
                //echo $genotype[411][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">WNT7B</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[412][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[412][3].'</div>';
                //echo $genotype[412][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">GJD2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[413][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[413][3].'</div>';
                //echo $genotype[413][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">UMODL1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[414][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[414][3].'</div>';
                //echo $genotype[414][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">BMP2K</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[415][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[415][3].'</div>';
                //echo $genotype[415][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">40</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>






<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">憂鬱症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>憂鬱症是一種涉及身體、情緒和思想的疾病。它會影響患者的飲食和<br>
              睡眠、對自己的感覺以及看待事情的方式，包含無用、無助和絕望。<br>
              憂鬱症並不同於暫時的情緒低落，如果不進行治療，症狀可以持續數<br>
              週、數月或是數年。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">7.3%</font>
        <br>
        <font style = "font-weight: 300;">女性比男性
        <br>
        高約2倍
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">憂鬱症</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與神經傳導物質合成與傳遞：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響血清素、正腎<br>
              上腺素、多巴胺等神經傳導物質的合成<br>
              及訊號傳導，使神經系統的正常運作受<br>
              到干擾。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TPH2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[220][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[220][3].'</div>';
                //echo $genotype[220][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">TPH1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[221][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[221][3].'</div>';
                //echo $genotype[221][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響神經系統發育 ：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響腦部神經系統<br>
              發育與神經傳導功能。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">BCL9</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[218][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[218][3].'</div>';
                //echo $genotype[218][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">BDNF</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[219][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[219][3].'</div>';
                //echo $genotype[219][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">MYT1L</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[222][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[222][3].'</div>';
                //echo $genotype[222][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">CTLA4</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[223][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[223][3].'</div>';
                //echo $genotype[223][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">PROKR2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[224][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[224][3].'</div>';
                //echo $genotype[224][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">41</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">躁鬱症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>躁鬱症，又稱躁狂憂鬱症，是一種可能引起患者情緒、精力及功能不穩<br>
              定的大腦失調症，患者情緒高低交替起伏，有時情緒高昂、有時低落。
          </li>
          <li>躁鬱症發病時出現的精神狀況會對個人的人際關係有所影響，工作或學<br>
              習狀態不佳，甚至自殺，後果非常嚴重。患者若接受有效治療，可以恢<br>
              復健康豐富的生活，如不接受治療，病情則會惡化。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">1.2%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "12" style="font-weight: 400;">
        <font color = "#5DADE2">躁鬱症</font>
      </th>




      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與神經傳導物質合成與傳遞：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響血清素、正腎<br>
              上腺素、多巴胺等神經傳導物質的合成<br>
              及訊號傳導，使神經系統的正常運作受<br>
              到干擾。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TPH1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[225][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[225][3].'</div>';
                //echo $genotype[225][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">HTR1A</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[231][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[231][3].'</div>';
                //echo $genotype[231][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">NTRK2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[234][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[234][3].'</div>';
                //echo $genotype[234][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">PROKR2-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[235][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[235][3].'</div>';
                //echo $genotype[235][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PROKR2-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[236][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[236][3].'</div>';
                //echo $genotype[236][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "7">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響神經系統發育 ：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響腦部神經系統<br>
              發育與神經傳導而導致躁鬱症。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">AKT1-1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[227][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[227][3].'</div>';
                //echo $genotype[227][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">AKT1-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[228][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[228][3].'</div>';
                //echo $genotype[228][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">AKT1-3</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[229][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[229][3].'</div>';
                //echo $genotype[229][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">COMT</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[230][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[230][3].'</div>';
                //echo $genotype[230][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">BDNF</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[226][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[226][3].'</div>';
                //echo $genotype[226][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">PDLIM5</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[232][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[232][3].'</div>';
                //echo $genotype[232][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">CTLA4</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[233][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[233][3].'</div>';
                //echo $genotype[233][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">42</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">思覺失調症</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>思覺失調屬輕型精神疾病的表面徵狀，一般包含感情障礙（如焦慮、憂<br>
              鬱等），思維障礙（如強迫觀念等）。思覺失調症的病徵有幻覺、妄想<br>
              、心理障礙、注意力不足、反應緩慢和胡言亂語的症狀，影響其日常生<br>
              活。
          </li>
          <li>思覺失調症患者中斷治療的復發率極高，若9個月後中斷治療，復發機率<br>
              約7成；2年內沒有持續治療，復發機率高達9成。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">1%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">思覺<br>失調症</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">調節神經傳導物質的作用：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響神經傳導物質<br>
              的合成及訊號傳導，使神經系統的正常<br>
              運作受到干擾。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">NRXN1-1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[241][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[241][3].'</div>';
                //echo $genotype[241][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">NRXN1-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[242][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[242][3].'</div>';
                //echo $genotype[242][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">G72/G30</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[239][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[239][3].'</div>';
                //echo $genotype[239][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">VRK2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[243][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[243][3].'</div>';
                //echo $genotype[243][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響神經系統發育 ：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響腦部神經系統<br>
              發育與神經傳導功能。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">BCL9</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[237][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[237][3].'</div>';
                //echo $genotype[237][2];
          ?>
        </font>
      </td>
    </tr align = "center">

    <tr align = "center">
      <td style="font-weight: 300;">ANK3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[238][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[238][3].'</div>';
                //echo $genotype[238][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">MYT1L</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[240][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[240][3].'</div>';
                //echo $genotype[240][2];
          ?>
        </font>
      </td>
    </tr>




  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">43</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">慢性阻塞性肺病</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>慢性阻塞性肺病是一種呼吸氣流受阻，而且無法以藥物完全恢復之疾病<br>
              ，通常是漸進式惡化。在全世界死亡原因中，慢性阻塞性肺病為第四位<br>
              。
          </li>
          <li>患者常會出現急性惡化，主要症狀為呼吸變得更困難，常伴有喘鳴和胸<br>
              悶、痰量和咳嗽次數增加、痰的黏稠度及顏色改變和發燒。上呼吸道感<br>
              染和空氣污染是惡化常見原因。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">1.2%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
        <font color = "#5DADE2">慢性<br>阻塞性<br>肺病</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響尼古丁的作用力：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會呈現尼古丁接受器<br>
              異常，使體內對於尼古丁之反應強度改<br>
              變，易產生成癮的現象。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;" >CHRNA3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[146][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[146][3].'</div>';
                //echo $genotype[146][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫調節相關：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型對於空氣中有害物質<br>
              所引起的發炎反應作用異常，經常累積<br>
              而導致慢性阻塞性肺病。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;" >ADIPOQ</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[142][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[142][3].'</div>';
                //echo $genotype[142][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響毒物代謝功能：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內毒物代謝功<br>
              能異常，特別是多環芳香化合物(致癌<br>
              物質)之解毒效果受影響。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">GSTP1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[143][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[143][3].'</div>';
                //echo $genotype[143][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <td style="font-weight: 300;">EPHX-1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[144][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[144][3].'</div>';
                //echo $genotype[144][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">EPHX-2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[145][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[145][3].'</div>';
                //echo $genotype[145][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">44</p>

</div>
</div>

<br>
<br>

<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>

<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">攝護腺肥大</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>攝護腺又稱前列腺，是男性泌尿生殖系統特有的器官。男性隨年齡增長<br>
              ，攝護腺出現一種良性增生及肥大現象，大約40歲開始增生、50歲開始<br>
              出現排尿困難症狀。
          </li>
          <li>良性攝護腺肥大雖然不是癌症，但會引發其他併發症，包括尿道發炎、<br>
              泌尿道感染、泌尿道結石、腎功能不良、性功能障礙等。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">男性40歲以上</font>
        <br>
        <font size="6" color = "#5DADE2">10%</font>
        <br>
        <font style = "font-weight: 400;">50歲以上超過</font>
        <br>
        <font size="6" color = "#5DADE2">50%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">攝護腺<br>肥大</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫調節相關：</li>
          <li style="font-weight: 100;">
             該基因具有免疫抑制的功能。帶有高風<br>
             險基因型易出現組織周遭出現異常發炎<br>
             反應。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;" >LILRA3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[251][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[251][3].'</div>';
                //echo $genotype[251][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與細胞生長的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型之細胞生長調控異<br>
              常，尿道周圍的攝護腺組織會出現增生<br>
              的變化。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;" >RFX6</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[252][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[252][3].'</div>';
                //echo $genotype[252][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">TGF-β1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[255][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[255][3].'</div>';
                //echo $genotype[255][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">VDR</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[256][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[256][3].'</div>';
                //echo $genotype[256][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">ITGA6</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[253][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[253][3].'</div>';
                //echo $genotype[253][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響賀爾蒙之調控作用：</li>
          <li style="font-weight: 100;">
              參與DHT(二氫睪固酮)之活性調控。帶<br>
              有高風險基因型會激活攝護腺細胞中的<br>
              生長因子，使攝護腺細胞增生，造成肥<br>
              大。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CYP17</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[254][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[254][3].'</div>';
                //echo $genotype[254][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">45</p>

</div>
</div>

<br>
<br>



<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>








<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">腎結石</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>腎結石是尿液中的礦物質結晶沈積在腎臟裡，有時會移動到輸尿管。較<br>
              小的腎結石常會隨尿液排出體外，但如果直徑增加到可能堵住輸尿管，<br>
              造成尿液受阻，引起劇烈腰痛，有時疼痛會延伸到下腹部或腹股溝。若<br>
              結石卡在輸尿管進入膀胱處，則病人經常有解尿困難，頻尿等類似泌尿<br>
              道感染的情形出現。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="5" color = "#5DADE2">10%</font>
        <br>
        <font style = "font-weight: 300;">男性是女性的4倍。
        <br>
        約 </font>
        <font size="5" color = "#5DADE2">50%</font><br>
        <font style = "font-weight: 300;">患者在五年內會有
        <br>
        復發的現象。
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "6" style="font-weight: 400;">
        <font color = "#5DADE2">腎結石</font>
      </th>




      <th rowspan = "6">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響尿液中結晶形成：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使抑制尿液中結晶<br>
              形成的調控蛋白活性下降，以致晶體過<br>
              多而產生沉積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IN-<br>MT-FAM188B<br>-AQP1-1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[175][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[175][3].'</div>';
                //echo $genotype[175][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">IN-<br>MT-FAM188B<br>-AQP1-2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[177][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[177][3].'</div>';
                //echo $genotype[177][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">MGP</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[174][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[174][3].'</div>';
                //echo $genotype[174][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">DGKH-1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[176][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[176][3].'</div>';
                //echo $genotype[176][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">DGKH-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[178][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[178][3].'</div>';
                //echo $genotype[178][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">IL-18</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[179][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[179][3].'</div>';
                //echo $genotype[179][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">46</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>







<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">腎衰竭</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>腎衰竭可分為急性腎損傷和慢性腎臟病。急性腎損傷只要經過適當的治<br>
              療就可能痊癒，而慢性腎臟病則為不可修復損傷。
          </li>
          <li>腎功能衰竭時，體內的廢液可能難以排除，會導致腫脹、酸血症、高鉀<br>
              血症、低血鈣、高血磷症，和貧血，骨骼的健康也可能會被影響。長期<br>
              的腎臟病也提高了心血管疾病的機率。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">慢性腎臟病約 </font>
        <br>
        <font size="6" color = "#5DADE2">11.9%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "3" style="font-weight: 400;">
        <font color = "#5DADE2">腎衰竭</font>
      </th>



      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響血管細胞修復：</li>
          <li style="font-weight: 100;">
              帶有高風險基因時，對於血管內皮層細<br>
              胞因血壓所造成的損傷修復能力降低，<br>
              造成腎衰竭風險增加。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">SOD2</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[455][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[455][3].'</div>';
                //echo $genotype[455][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">PPAR-𝛾</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[456][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[456][3].'</div>';
                //echo $genotype[456][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">誘發發炎反應：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTHFR</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[457][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[457][3].'</div>';
                //echo $genotype[457][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>


   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">47</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>








<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">氣喘</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>氣喘病是一種慢性的呼吸道發炎疾病，在臨床上大致可分為非過敏原引<br>
              起的及過敏原引起的兩種。
          </li>
          <li>氣喘依嚴重程度，會出現呼吸困難、喘鳴、胸悶和咳嗽等症狀，部分氣<br>
              喘病人還有多痰現象。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font size="6" color = "#5DADE2">11.9%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">氣喘</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫調節相關：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型之黏膜細胞容易產生<br>
              水腫和發炎反應，使支氣管內膜腫脹、<br>
              黏膜分泌過多而引起氣喘。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IL-13</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[244][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[244][3].'</div>';
                //echo $genotype[244][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">IL-4 </td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[246][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[246][3].'</div>';
                //echo $genotype[246][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">SCGB1A1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[250][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[250][3].'</div>';
                //echo $genotype[250][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響支氣管壁的收縮：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型易發生支氣管器壁的<br>
              肌肉收縮異常，引起氣喘。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ADAM33-1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[245][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[245][3].'</div>';
                //echo $genotype[245][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ADAM33-2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[249][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[249][3].'</div>';
                //echo $genotype[249][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">GPR154-1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[247][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[247][3].'</div>';
                //echo $genotype[247][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">GPR154-2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[248][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[248][3].'</div>';
                //echo $genotype[248][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">48</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>






<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">過敏性鼻炎</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>濕熱環境，加上溫差大、人口密集，且空氣污染嚴重易有過敏性鼻炎產<br>
              生。是一種患者的過敏體質或環境因素影響所形成的呼吸道慢性炎症反<br>
              應，嚴重者會變成鼻竇炎。
          </li>
          <li>過敏原檢測與保持室內通風的環境，盡量避免生冷飲食、多運動、維持<br>
              規律健康的生活，都有機會降低症狀與發生率。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">約 </font>
        <font size="6" color = "#5DADE2">15~20%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">過敏性<br>鼻炎</font>
      </th>




      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成過<br>
              敏性鼻炎。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">HLA</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[420][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[420][3].'</div>';
                //echo $genotype[420][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">C11orf30</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[421][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[421][3].'</div>';
                //echo $genotype[421][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">SEMA6A</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[423][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[423][3].'</div>';
                //echo $genotype[423][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">DHRS7</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[426][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[426][3].'</div>';
                //echo $genotype[426][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">誘發發炎反應：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TSLP</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[428][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[428][3].'</div>';
                //echo $genotype[428][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TMEM232</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[422][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[422][3].'</div>';
                //echo $genotype[422][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CLEC16A</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[424][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[424][3].'</div>';
                //echo $genotype[424][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[425][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[425][3].'</div>';
                //echo $genotype[425][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CROCC</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[427][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[427][3].'</div>';
                //echo $genotype[427][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">49</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">異位性皮膚炎</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>過敏性疾病之一，與基因以及環境有很大的關聯。因皮膚障壁有顯著異<br>
              常，造成外界過敏原/刺激物容易穿透皮膚，進而刺激皮膚發炎。
          </li>
          <br><br><br>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">超過 </font>
        <font size="6" color = "#5DADE2">10%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "6" style="font-weight: 400;">
        <font color = "#5DADE2">異位性<br>皮膚炎</font>
      </th>



      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成異<br>
              位性皮膚炎症。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">OVOL1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[432][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[432][3].'</div>';
                //echo $genotype[432][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">ZNF365</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[435][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[435][3].'</div>';
                //echo $genotype[435][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HLA-DRB1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[434][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[434][3].'</div>';
                //echo $genotype[434][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">誘發發炎反應：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">NLRP10</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[436][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[436][3].'</div>';
                //echo $genotype[436][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CCDC80</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[437][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[437][3].'</div>';
                //echo $genotype[437][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">C11orf30</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[433][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[433][3].'</div>';
                //echo $genotype[433][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">50</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">乾癬</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>又稱為牛皮癬或銀屑病。</li>
          <li>疾病成因不明，但被認為與遺傳、外傷、壓力、感染與內分泌有關。</li>
          <li>乾癬除發生於皮膚外，有相當比例會造成關節疾患(乾癬性關節病變)，另<br>
              外50%的病人手指甲及35%病人的腳趾甲會被乾癬侵犯，產生指甲凹陷、<br>
              黃斑、嚴重變形等。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">約 </font>
        <font size="5" color = "#5DADE2">0.2%~0.3%</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "10" style="font-weight: 400;">
        <font color = "#5DADE2">乾癬</font>
      </th>




      <th rowspan = "6">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">誘發發炎反應：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IL23R</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[438][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[438][3].'</div>';
                //echo $genotype[438][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">TRAF3IP2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[444][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[444][3].'</div>';
                //echo $genotype[444][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TNFAIP3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[445][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[445][3].'</div>';
                //echo $genotype[445][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">STAT2, IL23A</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[446][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[446][3].'</div>';
                //echo $genotype[446][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL12B</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[442][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[442][3].'</div>';
                //echo $genotype[442][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">TYK2</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[447][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[447][3].'</div>';
                //echo $genotype[447][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">參與免疫調節作用：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成乾<br>
              癬。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">KCNH7, IFIH1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[440][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[440][3].'</div>';
                //echo $genotype[440][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">LCE3B, LCE3D</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[439][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[439][3].'</div>';
                //echo $genotype[439][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TNIP1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[441][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[441][3].'</div>';
                //echo $genotype[441][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HLA-B, HLA-C</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[443][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[443][3].'</div>';
                //echo $genotype[443][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">51</p>

</div>
</div>

<br>
<br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">牙周病</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>發生在牙齒周邊組織的疾病，主因為牙菌斑及牙結石堆積於牙齒或牙根<br>
              表面，導致局部發炎反應，進而造成包括齒槽骨、牙齦等牙齒周邊支持<br>
              組織破壞，使牙齒逐漸鬆動，最後造成牙齒喪失。
          </li>
          <li>罹患牙周病者得到心肌梗塞與中風的機率是一般人的2~3倍；因牙周附<br>
              近的致病菌引發發炎反應釋放的發炎物質，導致血管動脈粥樣硬化病理<br>
              有所改變，且此些菌可能入侵牙齦造成菌血症，影響血小板凝集導致血<br>
              栓形成，更進而導致中風與心肌梗塞。
          </li>
        </ul>
      </td>


      <td align = "center">
        <font style = "font-weight: 400;">高達 </font>
        <font size="6" color = "#5DADE2">90%</font>
        <font style = "font-weight: 400;"> 以上</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "4" style="font-weight: 400;">
        <font color = "#5DADE2">牙周病</font>
      </th>




      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">誘發發炎反應：</li>
          <li style="font-weight: 100;">
              主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IL4</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[458][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[458][3].'</div>';
                //echo $genotype[458][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">IL8</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[459][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[459][3].'</div>';
                //echo $genotype[459][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL8</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[460][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[460][3].'</div>';
                //echo $genotype[460][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TGF-β1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[461][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[461][3].'</div>';
                //echo $genotype[461][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">52</p>

</div>
</div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">口腔癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>癌症與基因遺傳有關，然而，倘若缺少外界環境致癌因子，則這些致癌<br>
              基因很可能根本不會表現出來，亦即不會有口腔癌的發生。
          </li>
          <li>在歐美地區，以抽煙及喝酒為主要致病因子；但在台灣及印度，以嚼檳<br>
              榔為主要致病因子的地區。
          </li>
          <li>要戰勝口腔癌，第一要務即是：「不要嚼檳榔，不要抽煙」。
          </li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font size="6" color = "#5DADE2">22.48</font>
        <br>
        <font style = "font-weight: 300;">男女發生比率
        <br>
        約為8.2比1
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer2">

  <table class="table_disease_detail2" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col style="width: 60px;">項目</th>
      <th scope=col style="width: 300px;">基因功能類別</th>
      <th scope=col style="width: 120px;">基因名稱</th>
      <th scope=col style="width: 120px;">一般風險基因型</th>
      <th scope=col style="width: 120px;">您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "6" style="font-weight: 400;">
        <font color = "#5DADE2">口腔癌</font>
      </th>




      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA甲基化程度：</li>
          <li style="font-weight: 100;">
              該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTHFR </td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[402][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[402][3].'</div>';
                //echo $genotype[402][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響DNA修復能力：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響包括鹼基切除<br>
              修復（BER）、DNA雙鏈斷裂修復、訊<br>
              號傳遞等調控作用，使DNA損傷造成的<br>
              異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">XRCC1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[396][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[396][3].'</div>';
                //echo $genotype[396][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">Ku70</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[399][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[399][3].'</div>';
                //echo $genotype[399][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素的<br>
              誘發表現量異常，提高口腔癌易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CCR2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[397][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[397][3].'</div>';
                //echo $genotype[397][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">毒物代謝功能：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響細胞排毒能力<br>
              及身體對化學物質的解毒力。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">GSTP1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[400][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[400][3].'</div>';
                //echo $genotype[400][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">致癌物解毒功能：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使致癌物質活化(<br>
              如PHA多環芳烴類物質)，並影響解毒<br>
              功能。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CYP1A1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[403][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[403][3].'</div>';
                //echo $genotype[403][2];
          ?>
        </font>
      </td>
    </tr>

  </table>

  <br><br><br><br>
  <hr>
  <p style="font-weight: 300;" align = "center">53</p>

</div>
</div>

<br>
<br>


<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>

<div class="disease_detail2">

  <div class="disease_detail_outer6_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "2" style="font-weight: 400;">
        <font color = "#5DADE2">口腔癌</font>
      </th>

      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞生長、細胞凋亡的調控：</li>
          <li style="font-weight: 100;">
              該群基因參與細胞生長分化、細胞黏<br>
              附、細胞間訊號傳遞、細胞凋亡等調<br>
              控路徑，帶有高風險基因型易出現細<br>
              胞運作調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">P53</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[401][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[401][3].'</div>';
                //echo $genotype[401][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">VEGF-C</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[398][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[398][3].'</div>';
                //echo $genotype[398][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <hr>
   <p style="font-weight: 300;" align = "center">54</p>

 </div>
 </div>
 <br>
 <br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>

<div class="disease_title">
   <table class="table_disease_tile">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">鼻咽癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>鼻咽癌好發於中國東南沿海各省(尤其是廣東裔)聚集之地區如新加坡、香<br>
              港、台灣等地。
          </li>
          <li>主要原因約有三項，即遺傳因子、EB病毒感染、以及環境因素（食用過<br>
              多醃漬食物或鹹魚、工作環境之有機溶劑空氣污染及吸菸者等）。
          </li>
          <li>患者一等親內的家屬得病機會約為一般人的6~20倍。</li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font size="6" color = "#5DADE2">11</font>
        <br>
        <font style = "font-weight: 300;">男性比女性易患
        <br>
        比例約8.3比1
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "11" style="font-weight: 400;">
        <font color = "#5DADE2">鼻咽癌</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響DNA修復能力：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響鹼基切除修復<br>
              (BER)、DNA雙鏈斷裂修復等調控作用，<br>
              使DNA損傷造成的異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">XRCC1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[316][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[316][3].'</div>';
                //echo $genotype[316][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">NBS1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[315][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[315][3].'</div>';
                //echo $genotype[315][2];
          ?>
        </font>
      </td>    </tr>


     <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高鼻咽<br>
              癌易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">IL-18</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[307][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[307][3].'</div>';
                //echo $genotype[307][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL-23R</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[310][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[310][3].'</div>';
                //echo $genotype[310][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TGF-β1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[311][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[311][3].'</div>';
                //echo $genotype[311][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HLA-A</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[312][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[312][3].'</div>';
                //echo $genotype[312][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CTLA4</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[317][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[317][3].'</div>';
                //echo $genotype[317][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞增殖、細胞凋亡相關的訊號傳遞調控：</li>
          <li style="font-weight: 100;">
              該群基因參與細胞生長、分化、細胞間<br>
              訊號傳遞、細胞凋亡等調控路徑，帶有<br>
              高風險基因型易出現調控失衡，增加癌<br>
              變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MDS1-EVI1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[314][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[314][3].'</div>';
                //echo $genotype[314][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">P53</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[308][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[308][3].'</div>';
                //echo $genotype[308][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TNFRSF19</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[313][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[313][3].'</div>';
                //echo $genotype[313][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MMP2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[309][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[309][3].'</div>';
                //echo $genotype[309][2];
          ?>
        </font>
      </td>
    </tr>




  </table>

  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">55</p>

 </div>
 </div>

 <br>
 <br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">食道癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>危險因子包含:遺傳、吸菸與喝酒、營養不良、先前存在的食道疾病、硝<br>
              胺、社會經濟因素等。
          </li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font size="6" color = "#5DADE2">20</font>
        <br>
        <font style = "font-weight: 300;">男性比女性易患
        <br>
        比例約12.9比1
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer3_left">

  <table class="table_disease_detail2" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col style="width: 60px;">項目</th>
      <th scope=col style="width: 300px;">基因功能類別</th>
      <th scope=col style="width: 120px;">基因名稱</th>
      <th scope=col style="width: 120px;">一般風險基因型</th>
      <th scope=col style="width: 120px;">您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">食道癌</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA甲基化程度：</li>
          <li style="font-weight: 100;">
              該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTHFR </td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[283][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[283][3].'</div>';
                //echo $genotype[283][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA修復能力的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)、核<br>
              苷酸交互連結等參與DNA修復的調控作<br>
              用，使DNA損傷造成的異常逐漸在體內<br>
              累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">XRCC1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[289][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[289][3].'</div>';
                //echo $genotype[289][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">SMUG1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[284][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[284][3].'</div>';
                //echo $genotype[284][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PON1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[286][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[286][3].'</div>';
                //echo $genotype[286][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節： </li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高食道<br>
              癌易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;" >XBP1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[280][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[280][3].'</div>';
                //echo $genotype[280][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">酒精代謝的功能：</li>
          <li style="font-weight: 100;">
              酒精在體內經由乙醇脫氫酶(ADH)代謝<br>
              成乙醛，而乙醛藉由乙醛脫氫酶(ALDH)<br>
              氧化成乙酸。ADH系列基因加上ALDH<br>
              系列基因雙項皆帶有高風險的人，代表<br>
              其酒精的代謝能力較差，身體易將酒精<br>
              轉換成乙醛，加上本身乙醛的氧化能力<br>
              較差，使體內易累積乙醛(一級致癌物)<br>
              而提高食道癌的罹病風險。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ADH4</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[281][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[281][3].'</div>';
                //echo $genotype[281][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">ADH7</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[282][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[282][3].'</div>';
                //echo $genotype[282][2];
          ?>
        </font>
      </td>
    </tr>

  </table>
    <br><br>
    <hr>
    <p style="font-weight: 300;" align = "center">56</p>

  </div>
  </div>

<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_detail2">

  <div class="disease_detail_outer6">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "4" style="font-weight: 400;">
        <font color = "#5DADE2">食道癌</font>
      </th>


      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞增殖、生長相關的訊號傳遞調控：</li>
          <li style="font-weight: 100;">
              該群基因參與細胞生長、分化、增殖、<br>
              細胞間訊號傳遞等調控路徑，帶有高風<br>
              險基因型易出現細胞週期、細胞生長的<br>
              調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">PLCE1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[290][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[290][3].'</div>';
                //echo $genotype[290][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">EGF</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[285][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[285][3].'</div>';
                //echo $genotype[285][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">ALS2CR12</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[288][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[288][3].'</div>';
                //echo $genotype[288][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞凋亡的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使細胞凋亡抑制因<br>
              子異常活化或影響程序化細胞死亡的調<br>
              控平衡，以致細胞過度生長及分化，增<br>
              加細胞癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TP53</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[287][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[287][3].'</div>';
                //echo $genotype[287][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <hr>
   <p style="font-weight: 300;"  align = "center">57</p>

 </div>
 </div>
 <br>
 <br>




<div class = "disease_top_left">

  <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>





<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">肺癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>危險因子包含：吸菸與油煙、家族病史、空氣污染、肺結核及其他慢性疾<br>
              病、石棉暴露因素等。
          </li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font style = "font-weight: 300;">男性 </font>
        <font size="6" color = "#5DADE2">43.23</font>
        <br>
        <font style = "font-weight: 300;">女性 </font>
        <font size="6" color = "#5DADE2">29.89</font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer4_left">

  <table class="table_disease_detail2" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col style="width: 60px;">項目</th>
      <th scope=col style="width: 300px;">基因功能類別</th>
      <th scope=col style="width: 120px;">基因名稱</th>
      <th scope=col style="width: 120px;">一般風險基因型</th>
      <th scope=col style="width: 120px;">您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "9" style="font-weight: 400;">
        <font color = "#5DADE2">肺癌</font>
      </th>




      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA甲基化程度：</li>
          <li style="font-weight: 100;">
              該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTHFR </td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[302][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[302][3].'</div>';
                //echo $genotype[302][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA修復能力的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)等<br>
              參與DNA修復的調控作用，使DNA損傷<br>
              造成的異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">OGG1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[292][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[292][3].'</div>';
                //echo $genotype[292][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">XRCC1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[303][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[303][3].'</div>';
                //echo $genotype[303][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">APE1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[295][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[295][3].'</div>';
                //echo $genotype[295][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節： </li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高肺癌<br>
              易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CHRNA3</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[294][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[294][3].'</div>';
                //echo $genotype[294][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">NFκBIA</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[299][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[299][3].'</div>';
                //echo $genotype[299][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL23R</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[300][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[300][3].'</div>';
                //echo $genotype[300][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">毒物代謝的功能：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使致癌物質活化(如<br>
              PHA多環芳烴類物質)並影響解毒功能。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">CYP1A1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[304][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[304][3].'</div>';
                //echo $genotype[304][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞增殖、生長相關的訊號傳遞調控：</li>
          <li style="font-weight: 100;">
              該群基因參與細胞生長、分化、增殖、<br>
              細胞間訊號傳遞等調控路徑，帶有高風<br>
              險基因型易出現細胞週期、細胞生長的<br>
              調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">P53</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[305][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[305][3].'</div>';
                //echo $genotype[305][2];
          ?>
        </font>
      </td>
    </tr>

  </table>
    <br><br>
    <hr>
    <p style="font-weight: 300;" align = "center">58</p>

  </div>
  </div>
<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



<div class="disease_detail2">

  <div class="disease_detail_outer6">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
        <font color = "#5DADE2">肺癌</font>
      </th>


      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞凋亡的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使細胞凋亡抑制因<br>
              子異常活化或影響程序化細胞死亡的調<br>
              控平衡，以致細胞過度生長及分化，增<br>
              加細胞癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ERK5</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[296][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[296][3].'</div>';
                //echo $genotype[296][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CLPTM1L</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[291][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[291][3].'</div>';
                //echo $genotype[291][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TP63</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[298][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[298][3].'</div>';
                //echo $genotype[298][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">CHEK2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[301][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[301][3].'</div>';
                //echo $genotype[301][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞黏著的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型在細胞間黏附分子的<br>
              作用產生異常，有利於腫瘤細胞的移行<br>
              與侵犯正常組織。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">hsa-mir-196a2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[293][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[293][3].'</div>';
                //echo $genotype[293][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MMP2</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[306][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[306][3].'</div>';
                //echo $genotype[306][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">染色體完整性的調控：</li>
          <li style="font-weight: 100;">
              染色體末端的端粒可保護染色體的完整<br>
              性，維持細胞功能正常運作。帶有高風<br>
              險基因型因端粒酶活性異常而影響染色<br>
              體端粒的完整性，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TERT</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[297][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[297][3].'</div>';
                //echo $genotype[297][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <hr>
   <p style="font-weight: 300;" align = "center">59</p>

 </div>
 </div>




<br>
<br>




<div class = "disease_top_left">

<img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">胃癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>常見的危險因子包含：遺傳、年紀50歲以上、A型血型、燒烤食物、醬<br>
              菜鹹魚等鹽漬高鹽分食物、醃製食物、吸菸與酒精濫用、胃部相關其他<br>
              疾病、以及幽門螺旋桿菌導致之嚴重胃炎等。
          </li>
          <li>好發年齡以50～70歲佔大多數，男性比女性來得多；但小於40歲的胃癌<br>
              ，女性反多於男性。地緣分佈方面，台灣的東北部和東部山地鄉鎮是胃<br>
              癌的高死亡率地區，至於客家鄉鎮，則是死亡率最低的地區。
          </li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font size="6" color = "#5DADE2">9.46</font>
        <br>
        <font style = "font-weight: 300;">男性比女性易患
        <br>
        比例約1.81比1
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer2_left">

  <table class="table_disease_detail2" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col style="width: 60px;">項目</th>
      <th scope=col style="width: 300px;">基因功能類別</th>
      <th scope=col style="width: 120px;">基因名稱</th>
      <th scope=col style="width: 120px;">一般風險基因型</th>
      <th scope=col style="width: 120px;">您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "13" style="font-weight: 400;">
        <font color = "#5DADE2">胃癌</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA修復能力的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)、<br>
              鹼基配對修復(MMR)、核苷酸交互連結<br>
              等參與DNA修復的調控作用，使DNA損<br>
              傷造成的異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;" >ECRR1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[333][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[333][3].'</div>';
                //echo $genotype[333][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CLK2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[325][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[325][3].'</div>';
                //echo $genotype[325][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MRE11A</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[326][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[326][3].'</div>';
                //echo $genotype[326][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">RAD54L</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[327][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[327][3].'</div>';
                //echo $genotype[327][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "7">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞生長的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使表皮生長因子受<br>
              器(EGFR)過度表現或影響表皮生長因子<br>
              受器之調控機轉(EGFR pathway)，甚<br>
              至包括細胞成長/增生/代謝/轉移/血管<br>
              新生/凋亡各歷程的調控皆可能失衡。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MAP2K1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[322][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[322][3].'</div>';
                //echo $genotype[322][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td style="font-weight: 300;">FYN</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[320][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[320][3].'</div>';
                //echo $genotype[320][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">MAP2K4</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[321][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[321][3].'</div>';
                //echo $genotype[321][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PRKAA1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[332][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[332][3].'</div>';
                //echo $genotype[332][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PRLR</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[323][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[323][3].'</div>';
                //echo $genotype[323][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PLCG2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[324][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[324][3].'</div>';
                //echo $genotype[324][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">PSCA</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[331][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[331][3].'</div>';
                //echo $genotype[331][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞凋亡的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使細胞凋亡抑制因<br>
              子異常活化或影響程序化細胞死亡的調<br>
              控平衡，以致細胞過度生長及分化，增<br>
              加細胞癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">PLCE1</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[328][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[328][3].'</div>';
                //echo $genotype[328][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">P53</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[329][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[329][3].'</div>';
                //echo $genotype[329][2];
          ?>
        </font>
      </td>
    </tr>



  </table>
    <br><br><br><br>
    <hr>
    <p style="font-weight: 300;" align = "center">60</p>

  </div>
  </div>
<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>




<div class="disease_detail2">

  <div class="disease_detail_outer6">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
        <font color = "#5DADE2">胃癌</font>
      </th>


      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞黏著的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響黏蛋白或其他<br>
              細胞間黏附分子的作用，進而使細胞間<br>
              膜表面受體訊號轉導與免疫活化功能減<br>
              弱。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MUC1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[330][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[330][3].'</div>';
                //echo $genotype[330][2];
          ?>
        </font>
      </td>
    </tr>





    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高胃癌<br>
              易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">COX2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[318][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[318][3].'</div>';
                //echo $genotype[318][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">TNF-α</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[334][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[334][3].'</div>';
                //echo $genotype[334][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL10</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[335][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[335][3].'</div>';
                //echo $genotype[335][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">IL8</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[319][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[319][3].'</div>';
                //echo $genotype[319][2];
          ?>
        </font>
      </td>
    </tr>



  </table>

  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <hr>
   <p style="font-weight: 300;" align = "center">61</p>


 </div>
 </div>

<br>
<br>




 <div class = "disease_top_left">

   <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

 </div>






<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">肝癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>

    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>肝癌常見於東南亞、中國大陸和日本。盛行的年齡介於31~60歲之間。
          </li>
          <li>常見的危險因子包含：肝炎病毒(B型與C型病毒感染)、喝酒、抽煙、嚼<br>
              食檳榔、食用含黃麴毒素的發霉過後黃豆、玉米、花生、小麥及五穀雜<br>
              糧類，遺傳基因等。
          </li>
          <li>臺灣每100個死亡男性有11個死於肝硬化或肝癌。
          </li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font size="6" color = "#5DADE2">29.90</font>
        <br>
        <font style = "font-weight: 300;">男性比女性易患
        <br>
        比例約2.56比1
        </font>
      </td>

    </tr>

  </table>


</div>



<div class="disease_detail">

  <div class="disease_detail_outer2_left">

  <table class="table_disease_detail2" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col style="width: 60px;">項目</th>
      <th scope=col style="width: 300px;">基因功能類別</th>
      <th scope=col style="width: 120px;">基因名稱</th>
      <th scope=col style="width: 120px;">一般風險基因型</th>
      <th scope=col style="width: 120px;">您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "8" style="font-weight: 400;">
        <font color = "#5DADE2">肝癌</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA修復能力的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響包括鹼基切除<br>
              修復(BER)、核苷酸交互連結、雙股核<br>
              苷酸修復(NHEJ pathway)等參與DNA<br>
              修復的調控作用，使DNA損傷造成的異<br>
              常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">OGG1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[336][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[336][3].'</div>';
                //echo $genotype[336][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">XRCC5</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[337][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[337][3].'</div>';
                //echo $genotype[337][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">XRCC3</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[345][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[345][3].'</div>';
                //echo $genotype[345][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高肝癌<br>
              易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">TNF-α</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[346][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[346][3].'</div>';
                //echo $genotype[346][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;">IL10</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[338][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[338][3].'</div>';
                //echo $genotype[338][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">HLA-DQ/DR</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[339][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[339][3].'</div>';
                //echo $genotype[339][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">MICA</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[340][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[340][3].'</div>';
                //echo $genotype[340][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">毒物代謝的功能：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內毒物代謝功<br>
              能異常，特別是多環芳香化合物(致癌<br>
              物質)之解毒效果受影響。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">EPHX1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[341][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[341][3].'</div>';
                //echo $genotype[341][2];
          ?>
        </font>
      </td>
    </tr>


  </table>
    <br><br><br><br>
    <hr>
    <p style="font-weight: 300;" align = "center">62</p>

  </div>
  </div>
<br>
<br>




<div class = "disease_top">

  <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_detail2">

  <div class="disease_detail_outer6">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
        <font color = "#5DADE2">肝癌</font>
      </th>


      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞增殖、生長相關的訊號傳遞調控：</li>
          <li style="font-weight: 100;">
              該群基因參與細胞生長、分化、增殖、<br>
              細胞間訊號傳遞、細胞凋亡等調控路<br>
              徑，帶有高風險基因型易出現細胞運<br>
              作調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">P21</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[343][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[343][3].'</div>';
                //echo $genotype[343][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;" >P27</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[344][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[344][3].'</div>';
                //echo $genotype[344][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">P53</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[347][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[347][3].'</div>';
                //echo $genotype[347][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;">EGF</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[342][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[342][3].'</div>';
                //echo $genotype[342][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA甲基化程度：</li>
          <li style="font-weight: 100;">
              該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTHFR</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[348][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[348][3].'</div>';
                //echo $genotype[348][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <hr>
   <p style="font-weight: 300;" align = "center">63</p>


 </div>
 </div>

 <br>
 <br>




  <div class = "disease_top_left">

    <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

  </div>





<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">大腸癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>

    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>在歐美大腸癌好發在40~50歲以上，而台灣卻有年輕化的趨勢，朝向20~30<br>
              歲罹癌。
          </li>
          <li>常見的危險因子包含：飲食習慣(高熱量、高脂肪、多紅肉、低纖維)、酗<br>
              酒與抽煙、家族遺傳、個人大腸相關疾病、缺乏運動等。
          </li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font size="6" color = "#5DADE2">41.29</font>
        <br>
        <font style = "font-weight: 300;">男性比女性易患
        <br>
        比例約1.35比1
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer2_left">

  <table class="table_disease_detail2" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col style="width: 60px;">項目</th>
      <th scope=col style="width: 300px;">基因功能類別</th>
      <th scope=col style="width: 120px;">基因名稱</th>
      <th scope=col style="width: 120px;">一般風險基因型</th>
      <th scope=col style="width: 120px;">您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "6" style="font-weight: 400;">
        <font color = "#5DADE2">大腸癌</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA甲基化程度：</li>
          <li style="font-weight: 100;">
              該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTHFR</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[268][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[268][3].'</div>';
                //echo $genotype[268][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高大腸<br>
              癌易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">RAD18</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[275][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[275][3].'</div>';
                //echo $genotype[275][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td style="font-weight: 300;" >NFκBIA</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[276][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[276][3].'</div>';
                //echo $genotype[276][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">LBP</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[277][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[277][3].'</div>';
                //echo $genotype[277][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">毒物代謝的功能：</li>
          <li style="font-weight: 100;">
              該基因群參與多種致癌物質及藥物之代<br>
              謝，帶有高風險基因型會使體內化學物<br>
              質代謝功能異常，造成體內致癌物質之<br>
              累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">ALDH2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[278][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[278][3].'</div>';
                //echo $genotype[278][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">NQO1</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[269][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[269][3].'</div>';
                //echo $genotype[269][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


        <br><br><br><br>
        <hr>
        <p style="font-weight: 300;" align = "center">64</p>

      </div>
      </div>
    <br>
    <br>



<div class = "disease_top">

      <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_detail2">

  <div class="disease_detail_outer6">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
            <font color = "#5DADE2">大腸癌</font>
          </th>


      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA修復能力的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)等<br>
              參與DNA修復的調控作用，使DNA損傷<br>
              造成的異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">REV3L</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[274][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[274][3].'</div>';
                //echo $genotype[274][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center" >
      <td style="font-weight: 300;">XRCC1</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[270][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[270][3].'</div>';
                //echo $genotype[270][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞生長的調控：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使表皮生長因子過<br>
              度表現或影響細胞生長相關訊息的傳遞<br>
              ，涉及基因轉錄、細胞週期、細胞黏附<br>
              等調控，促使癌細胞的增殖及生長。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">APC</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[267][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[267][3].'</div>';
                //echo $genotype[267][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center" >
      <td style="font-weight: 300;">POU5F1B</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[272][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[272][3].'</div>';
                //echo $genotype[272][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">EGF</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[271][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[271][3].'</div>';
                //echo $genotype[271][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">SMAD7</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[273][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[273][3].'</div>';
                //echo $genotype[273][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞凋亡的調控：</li>
          <li style="font-weight: 100;">
              該基因參與細胞週期調節、避免細胞癌<br>
              變發生，且具活化DNA修復蛋白的功能<br>
              。帶有高風險基因型會提高細胞癌變的<br>
              發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">P53</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[279][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[279][3].'</div>';
                //echo $genotype[279][2];
          ?>
        </font>
      </td>
    </tr>




  </table>


  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>

   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <hr>
   <p style="font-weight: 300;" align = "center">65</p>


 </div>
 </div>


 <br>
 <br>




<div class = "disease_top_left">

    <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>


<div class="disease_title">
   <table class="table_disease_tile_left">

    <tr>
      <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
        <font size="4">胰臟癌</font>
      </th>

      <th align="center" scope=col style="width:185px; font-weight: 400;">
        <font size="4">發生率</font>
      </th>
    </tr>


    <tr>
      <td style="border-right: 1px solid #F7DC6F;">
        <ul style="font-weight: 300;">
          <li>胰臟癌早期症狀不明顯，且缺乏特異性的表現和敏感的診斷指標，早期<br>
              診斷極為困難，因此治療效果較不佳且癒後較差。
          </li>
          <li>造成胰臟癌的確切原因至今仍不明確，常見的危險因子包含：酗酒與抽<br>
              煙、家族遺傳、糖尿病、肥胖症、慢性胰臟癌、環境接觸工業有機溶劑<br>
              與飲食習慣(蔬菜及水果攝取不足、紅肉或高熱量的食物攝取過量)等。
          </li>
        </ul>
      </td>


      <td align = "center">
        每十萬人口<br>年齡標準化<br>
        <font size="6" color = "#5DADE2">5.9</font>
        <br>
        <font style = "font-weight: 300;">男性比女性易患
        <br>
        比例約1.36比1
        </font>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">

  <div class="disease_detail_outer5_left">

  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

    <tr align="center" bgcolor = "#A2D9CE">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th class = "table_disease_detail_firstcol" rowspan = "13" style="font-weight: 400;">
        <font color = "#5DADE2">胰臟癌</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">DNA甲基化程度：</li>
          <li style="font-weight: 100;">
              該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">MTRR</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[374][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[374][3].'</div>';
                //echo $genotype[374][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td style="font-weight: 300;" >MTHFR</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[380][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[380][3].'</div>';
                //echo $genotype[380][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">影響DNA修復能力：<li>
          <li style="font-weight: 100;">
              帶有高風險基因型會影響鹼基切除修復<br>
              (BER)、DNA雙鏈斷裂修復、訊號傳遞<br>
              等調控作用，使DNA損傷造成的異常逐<br>
              漸在體內累積。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">XRCC1</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[376][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[376][3].'</div>';
                //echo $genotype[376][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">免疫反應的調節：</li>
          <li style="font-weight: 100;">
              帶有高風險基因型會使體內發炎激素的<br>
              誘發表現量異常，提高胰臟癌易感性。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">COX2</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[381][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[381][3].'</div>';
                //echo $genotype[381][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">CTLA4</td>
      <td>
        <font color = "#9d9e9e">
          GG
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[379][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[379][3].'</div>';
                //echo $genotype[379][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
          <li style="font-weight: 400;">細胞生長、細胞凋亡的調控：</li>
          <li style="font-weight: 100;">
              該群基因參與細胞生長分化、細胞黏附<br>
              、細胞間訊號傳遞、細胞凋亡等調控路<br>
              徑，帶有高風險基因型易出現細胞運作<br>
              調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td style="font-weight: 300;">PRLHR</td>
      <td>
        <font color = "#9d9e9e">
          AA
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[377][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[377][3].'</div>';
                //echo $genotype[377][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">FasL</td>
      <td>
        <font color = "#9d9e9e">
          TT
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[375][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[375][3].'</div>';
                //echo $genotype[375][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td style="font-weight: 300;">DPP6</td>
      <td>
        <font color = "#9d9e9e">
          CC
        </font>
      </td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[378][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[378][3].'</div>';
                //echo $genotype[378][2];
          ?>
        </font>
      </td>
    </tr>



  </table>

  <ul style="list-style-type:none; text-align: left; font-weight: 300;">
    備註：<br>
    (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
    (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
    &nbsp&nbsp&nbsp&nbsp
    性影響因子，請多加留意。<br>
    (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
  </ul>


   <br>
   <hr>
   <p style="font-weight: 300;" align = "center">66</p>

 </div>
 </div>


<br>
<br>







  <div class = "disease_top">

   <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

  </div>





   <div class="disease_title">
      <table class="table_disease_tile">

       <tr>
         <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
           <font size="4">膀胱癌</font>
         </th>

         <th align="center" scope=col style="width:185px; font-weight: 400;">
           <font size="4">發生率</font>
         </th>
       </tr>


       <tr>
         <td style="border-right: 1px solid #F7DC6F;">
           <ul style="font-weight: 300;">
             <li>膀胱癌是泌尿系統第二好發的癌症。
             </li>
             <li>常見的危險因子包含：抽菸、工作環境(如接觸化學藥劑、卡車駕駛、鉛管<br>
                 工、美髮師等)、膀胱相關發炎與感染、結石、常吃醃製、炭烤食物等。
             </li>
           </ul>
         </td>


         <td align = "center">
           每十萬人口<br>年齡標準化<br>
           <font size="6" color = "#5DADE2">2.29</font>
           <br>
           <font style = "font-weight: 300;">男性比女性易患
           <br>
           比例約2.7比1
           </font>
         </td>

       </tr>

     </table>


   </div>




   <div class="disease_detail">

     <div class="disease_detail_outer5">

     <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

       <tr align="center" bgcolor = "#A2D9CE">
         <th scope=col>項目</th>
         <th scope=col>基因功能類別</th>
         <th scope=col>基因名稱</th>
         <th scope=col>一般風險基因型</th>
         <th scope=col>您的基因型</th>
       </tr>


       <tr align="center">
         <th class = "table_disease_detail_firstcol" rowspan = "10" style="font-weight: 400;">
           <font color = "#5DADE2">膀胱癌</font>
         </th>

         <th rowspan = "2">
           <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
             <li style="font-weight: 400;">DNA修復能力的調控：<li>
             <li style="font-weight: 100;">
                 帶有高風險基因型會影響包括核苷酸切<br>
                 除修復(NER)、鹼基切除修復(BER)等參<br>
                 與DNA修復的調控作用，使DNA損傷造<br>
                 成的異常逐漸在體內累積。
             </li>
           </ul>
         </th>

         <td style="font-weight: 300;">XRCC3</td>
         <td>
           <font color = "#9d9e9e">
             CC
           </font>
         </td>
         <td align = "center">
           <font face = "">
             <?php echo '<div style="Color:'.(($genotype[261][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[261][3].'</div>';
                   //echo $genotype[261][2];
             ?>
           </font>
         </td>
       </tr>

       <tr align = "center">
         <td style="font-weight: 300;">hOGG1</td>
         <td>
           <font color = "#9d9e9e">
             GG
           </font>
         </td>
         <td align = "center">
           <font face = "">
             <?php echo '<div style="Color:'.(($genotype[264][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[264][3].'</div>';
                   //echo $genotype[264][2];
             ?>
           </font>
         </td>
       </tr>


        <tr align = "center">
         <th rowspan = "3">
           <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
             <li style="font-weight: 400;">免疫反應的調節：</li>
             <li style="font-weight: 100;">
                 帶有高風險基因型會使體內發炎激素或<br>
                 細胞介素的誘發表現量異常，提高膀胱<br>
                 癌易感性。<br>
             </li>
           </ul>
         </th>

         <td style="font-weight: 300;">IL-17-1</td>
         <td>
           <font color = "#9d9e9e">
             AA
           </font>
         </td>
         <td align = "center">
           <font face = "">
             <?php echo '<div style="Color:'.(($genotype[257][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[257][3].'</div>';
                   //echo $genotype[257][2];
             ?>
           </font>
         </td>
       </tr>

       <tr align = "center">
         <td style="font-weight: 300;">IL-17-2</td>
         <td>
           <font color = "#9d9e9e">
             CC
           </font>
         </td>
         <td align = "center">
           <font face = "">
             <?php echo '<div style="Color:'.(($genotype[258][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[258][3].'</div>';
                   //echo $genotype[258][2];
             ?>
           </font>
         </td>
       </tr>


       <tr align = "center">
         <td style="font-weight: 300;">TLR4</td>
         <td>
           <font color = "#9d9e9e">
             GG
           </font>
         </td>
         <td align = "center">
           <font face = "">
             <?php echo '<div style="Color:'.(($genotype[262][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[262][3].'</div>';
                   //echo $genotype[262][2];
             ?>
           </font>
         </td>
       </tr>


       <tr align = "center">
        <th rowspan = "4">
          <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
            <li style="font-weight: 400;">細胞生長的調控：</li>
            <li style="font-weight: 100;">
                帶有高風險基因型會使表皮生長因子受<br>
                器(EGFR)過度表現或影響表皮生長因子<br>
                受器之調控機轉(EGFR pathway)，還<br>
                包括基因轉錄、細胞分化等調控皆可能<br>
                失衡。
            </li>
          </ul>
        </th>

        <td style="font-weight: 300;">PSCA</td>
        <td>
          <font color = "#9d9e9e">
            CC
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[259][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[259][3].'</div>';
                  //echo $genotype[259][2];
            ?>
          </font>
        </td>
      </tr>

      <tr align = "center">
        <td style="font-weight: 300;">EGRF</td>
        <td>
          <font color = "#9d9e9e">
            TT
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[263][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[263][3].'</div>';
                  //echo $genotype[263][2];
            ?>
          </font>
        </td>
      </tr>


      <tr align = "center">
        <td style="font-weight: 300;">has-miR-146a</td>
        <td>
          <font color = "#9d9e9e">
            CC
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[265][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[265][3].'</div>';
                  //echo $genotype[265][2];
            ?>
          </font>
        </td>
      </tr>

      <tr align = "center">
        <td style="font-weight: 300;">CCND1</td>
        <td>
          <font color = "#9d9e9e">
            GG
          </font>
        </td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[266][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[266][3].'</div>';
                  //echo $genotype[266][2];
            ?>
          </font>
        </td>
      </tr>



      <tr align = "center">
       <th rowspan = "1">
         <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
           <li style="font-weight: 400;">細胞凋亡的調控：</li>
           <li style="font-weight: 100;">
               帶有高風險基因型會影響程序化細胞死<br>
               亡的調控平衡，增加細胞癌變。
           </li>
         </ul>
       </th>

       <td style="font-weight: 300;">P53</td>
       <td>
         <font color = "#9d9e9e">
           GG
         </font>
       </td>
       <td align = "center">
         <font face = "">
           <?php echo '<div style="Color:'.(($genotype[260][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[260][3].'</div>';
                 //echo $genotype[260][2];
           ?>
         </font>
       </td>
     </tr>



     </table>


     <ul style="list-style-type:none; text-align: left; font-weight: 300;">
       備註：<br>
       (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
       (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
       &nbsp&nbsp&nbsp&nbsp
       性影響因子，請多加留意。<br>
       (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </ul>

      <br>
      <hr>
      <p style="font-weight: 300;" align = "center">67</p>


    </div>
    </div>

    <br>
    <br>



    <div class = "disease_top_left">

         <img src= "../graph/疾病頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

    </div>



        <div class="disease_title">
           <table class="table_disease_tile_left">

            <tr>
              <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
                <font size="4">攝護腺癌</font>
              </th>

              <th align="center" scope=col style="width:185px; font-weight: 400;">
                <font size="4">發生率</font>
              </th>
            </tr>


            <tr>
              <td style="border-right: 1px solid #F7DC6F;">
                <ul style="font-weight: 300;">
                  <li>攝護腺癌在45歲以前的個案相當罕見，但在55歲以後發生率則大幅上升。
                  </li>
                  <li>常見的危險因子包含：家族病史、地理區域、遺傳、生活飲食習慣、抽<br>
                      菸、肥胖、糖尿病、性傳染病等。
                  </li>
                </ul>
              </td>


              <td align = "center">
                每十萬人口<br>年齡標準化<br>
                <font style = "font-weight: 300;">男性 </font>
                <font size="6" color = "#5DADE2">29.7</font>
              </td>

            </tr>

          </table>


        </div>




        <div class="disease_detail">

          <div class="disease_detail_outer_left">

          <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

            <tr align="center" bgcolor = "#A2D9CE">
              <th scope=col>項目</th>
              <th scope=col>基因功能類別</th>
              <th scope=col>基因名稱</th>
              <th scope=col>一般風險基因型</th>
              <th scope=col>您的基因型</th>
            </tr>


            <tr align="center">
              <th class = "table_disease_detail_firstcol" rowspan = "7" style="font-weight: 400;">
                <font color = "#5DADE2">攝護<br>腺癌</font>
              </th>

              <th rowspan = "2">
                <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
                  <li style="font-weight: 400;">毒物代謝功能：<li>
                  <li style="font-weight: 100;">
                      帶有高風險基因型會影響細胞排毒能力<br>
                      及身體對化學物質的解毒力。<br>
                  </li>
                </ul>
              </th>

              <td style="font-weight: 300;">COMT</td>
              <td>
                <font color = "#9d9e9e">
                  AA
                </font>
              </td>
              <td align = "center">
                <font face = "">
                  <?php echo '<div style="Color:'.(($genotype[406][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[406][3].'</div>';
                        //echo $genotype[406][2];
                  ?>
                </font>
              </td>
            </tr>

            <tr align = "center">
              <td style="font-weight: 300;">PON1</td>
              <td>
                <font color = "#9d9e9e">
                  CC
                </font>
              </td>
              <td align = "center">
                <font face = "">
                  <?php echo '<div style="Color:'.(($genotype[408][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[408][3].'</div>';
                        //echo $genotype[408][2];
                  ?>
                </font>
              </td>
            </tr>


             <tr align = "center">
              <th rowspan = "5">
                <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
                  <li style="font-weight: 400;">細胞生長的調控：</li>
                  <li style="font-weight: 100;">
                      帶有高風險基因型會使血管內皮生長因<br>
                      子表現異常或影響細胞生長相關訊息的<br>
                      傳遞，進而使細胞週期、細胞分化、細<br>
                      胞黏附等調控失衡，促使癌細胞的增殖<br>
                      及生長。
                  </li>
                </ul>
              </th>

              <td style="font-weight: 300;">RFX6</td>
              <td>
                <font color = "#9d9e9e">
                  CC
                </font>
              </td>
              <td align = "center">
                <font face = "">
                  <?php echo '<div style="Color:'.(($genotype[405][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[405][3].'</div>';
                        //echo $genotype[405][2];
                  ?>
                </font>
              </td>
            </tr>


           <tr align = "center">
             <td style="font-weight: 300;">FGFR4</td>
             <td>
               <font color = "#9d9e9e">
                 GG
               </font>
             </td>
             <td align = "center">
               <font face = "">
                 <?php echo '<div style="Color:'.(($genotype[409][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[409][3].'</div>';
                       //echo $genotype[409][2];
                 ?>
               </font>
             </td>
           </tr>


           <tr align = "center">
             <td style="font-weight: 300;">TGF-β1</td>
             <td>
               <font color = "#9d9e9e">
                 AA
               </font>
             </td>
             <td align = "center">
               <font face = "">
                 <?php echo '<div style="Color:'.(($genotype[410][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[410][3].'</div>';
                       //echo $genotype[410][2];
                 ?>
               </font>
             </td>
           </tr>

           <tr align = "center">
             <td style="font-weight: 300;">VDR</td>
             <td>
               <font color = "#9d9e9e">
                 TT
               </font>
             </td>
             <td align = "center">
               <font face = "">
                 <?php echo '<div style="Color:'.(($genotype[404][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[404][3].'</div>';
                       //echo $genotype[404][2];
                 ?>
               </font>
             </td>
           </tr>

           <tr align = "center">
             <td style="font-weight: 300;">CDH1</td>
             <td>
               <font color = "#9d9e9e">
                 CC
               </font>
             </td>
             <td align = "center">
               <font face = "">
                 <?php echo '<div style="Color:'.(($genotype[407][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[407][3].'</div>';
                       //echo $genotype[407][2];
                 ?>
               </font>
             </td>
           </tr>

          </table>


          <ul style="list-style-type:none; text-align: left; font-weight: 300;">
            備註：<br>
            (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
            (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
            &nbsp&nbsp&nbsp&nbsp
            性影響因子，請多加留意。<br>
            (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
          </ul>

           <br>
           <hr>
           <p style="font-weight: 300;" align = "center">68</p>

         </div>
         </div>

<br>
<br>


<div class = "disease_top">

     <img src= "../graph/疾病頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

</div>



    <div class="disease_title">
       <table class="table_disease_tile">

        <tr>
          <th align="center" scope=col style="border-right: 1px solid #F7DC6F; height:20px; font-weight: 400;">
            <font size="4">淋巴癌</font>
          </th>

          <th align="center" scope=col style="width:185px; font-weight: 400;">
            <font size="4">發生率</font>
          </th>
        </tr>


        <tr>
          <td style="border-right: 1px solid #F7DC6F;">
            <ul style="font-weight: 300;">
              <li>淋巴癌是源發自淋巴組織的一種癌症。淋巴系統包括淋巴組織及器官，<br>
                  譬如脾臟、扁桃腺、淋巴球（白血病的一種）以及豆狀的淋巴結，它的<br>
                  功能是對抗病菌造成的感染。
              </li>
              <li>疾病發生原因不明，暴露在有機化學物質（如苯）、曾經接受過放射治<br>
                  療或化學治療者，罹患風險較高。曾遭Ｃ型肝炎或幽門螺蜁桿菌，也較<br>
                  容易罹患淋巴癌。
              </li>
              <li>台灣每年新增3000個淋巴癌患者。
              </li>
            </ul>
          </td>


          <td align = "center">
            每十萬人口<br>年齡標準化<br>
            <font style = "font-weight: 300;">男性 </font>
            <font size="6" color = "#5DADE2">8.43</font>
            <br>
            <font style = "font-weight: 300;">女性 </font>
            <font size="6" color = "#5DADE2">5.96</font>
          </td>

        </tr>

      </table>


    </div>




    <div class="disease_detail">

      <div class="disease_detail_outer">

      <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL" style="display:inline-table;">

        <tr align="center" bgcolor = "#A2D9CE">
          <th scope=col>項目</th>
          <th scope=col>基因功能類別</th>
          <th scope=col>基因名稱</th>
          <th scope=col>一般風險基因型</th>
          <th scope=col>您的基因型</th>
        </tr>


        <tr align="center">
          <th class = "table_disease_detail_firstcol" rowspan = "5" style="font-weight: 400;">
            <font color = "#5DADE2">淋巴癌</font>
          </th>

          <th rowspan = "2">
            <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
              <li style="font-weight: 400;">免疫反應：<li>
              <li style="font-weight: 100;">
                  帶有高風險基因型對於誘發白血球進行<br>
                  免疫反應的作用異常，增加癌症易感性。<br>
              </li>
            </ul>
          </th>

          <td style="font-weight: 300;">TNF-α</td>
          <td>
            <font color = "#9d9e9e">
              GG
            </font>
          </td>
          <td align = "center">
            <font face = "">
              <?php echo '<div style="Color:'.(($genotype[462][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[462][3].'</div>';
                    //echo $genotype[462][2];
              ?>
            </font>
          </td>
        </tr>

        <tr align = "center">
          <td style="font-weight: 300;">IL-10-2</td>
          <td>
            <font color = "#9d9e9e">
              CC
            </font>
          </td>
          <td align = "center">
            <font face = "">
              <?php echo '<div style="Color:'.(($genotype[463][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[463][3].'</div>';
                    //echo $genotype[463][2];
              ?>
            </font>
          </td>
        </tr>


         <tr align = "center">
          <th rowspan = "1">
            <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
              <li style="font-weight: 400;">毒物代謝功能：</li>
              <li style="font-weight: 100;">
                  帶有高風險基因型會影響細胞排毒能力<br>
                  及身體對化學物質的解毒力。<br>
              </li>
            </ul>
          </th>

          <td style="font-weight: 300;">DR1</td>
          <td>
            <font color = "#9d9e9e">
              GG
            </font>
          </td>
          <td align = "center">
            <font face = "">
              <?php echo '<div style="Color:'.(($genotype[464][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[464][3].'</div>';
                    //echo $genotype[464][2];
              ?>
            </font>
          </td>
        </tr>



        <tr align = "center">
         <th rowspan = "2">
           <ul style="list-style-type:none; text-align: left; padding-left: 17px;">
             <li style="font-weight: 400;">DNA修復能力的調控：</li>
             <li style="font-weight: 100;">
                 帶有高風險基因型會影響包括鹼基切除<br>
                 修復(BER)、雙股斷裂修復(NHEJ path-<br>
                 way)等調控作用，使DNA損傷造成的異<br>
                 常逐漸在體內累積。
             </li>
           </ul>
         </th>

         <td style="font-weight: 300;">ERCC2</td>
         <td>
           <font color = "#9d9e9e">
             TT
           </font>
         </td>
         <td align = "center">
           <font face = "">
             <?php echo '<div style="Color:'.(($genotype[465][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[465][3].'</div>';
                   //echo $genotype[465][2];
             ?>
           </font>
         </td>
       </tr>

       <tr align = "center">
         <td style="font-weight: 300;">TP53</td>
         <td>
           <font color = "#9d9e9e">
             GG
           </font>
         </td>
         <td align = "center">
           <font face = "">
             <?php echo '<div style="Color:'.(($genotype[466][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[466][3].'</div>';
                   //echo $genotype[466][2];
             ?>
           </font>
         </td>
       </tr>




      </table>


      <ul style="list-style-type:none; text-align: left; font-weight: 300;">
        備註：<br>
        (1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
        (2)<font color = "red" style = "font-weight: 400;">紅字標示判定為『高風險』基因型</font>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的先天<br>
        &nbsp&nbsp&nbsp&nbsp
        性影響因子，請多加留意。<br>
        (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
      </ul>

       <br>
       <hr>
       <p style="font-weight: 300;" align = "center">69</p>

     </div>
     </div>


     <div class = "public_page">

       <img src= "../graph/G2報告書_女_v6.2_範例書81.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

     </div>



     <div class = "public_page">

       <img src= "../graph/G2報告書_女_v6.2_範例書82.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

     </div>



     <div class = "disease_top">

          <img src= "../graph/綜合評估頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

     </div>


     <div class = "disease_title_last">
          <br><br><br><br>
          <h1 align = "center" style="font-weight: 100;"><font size = "6">綜合高風險疾病</font></h1>
          <br>
     </div>


         <div class="disease_detail6">

                 <img class = "img_last" src= "../graph/綜合風險評估-removebg.png" alt= "tcigene_logo" align="middle" style="width:350px;height:950px;">

                 <table class="high_risk_disease" FRAME="VOID" BORDER="2" RULES="ALL">

                   <tr>
                     <th colspan = "3" style="text-align: left">
                       <br>
                       <img src= "../graph/綜合風險icon.png" alt= "tcigene_logo" align="left" style="width:35px;height:35px;">
                       <font size = "5" style = "font-weight: 400;">&nbsp綜合高風險疾病</font>
                       <hr color = #c7c8c8 width = "100%" size = 1px >
                     </th>
                   </tr>



                   <tr align="left">

                     <td height = "20" style = "padding-top : 10px; padding-bottom: 10px;">
                       <font face = "">
                           <?php
                               echo '<span style="font-weight: 400"> '.$disease_risk[1][1].'</span>';
                           ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[2][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[3][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[4][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[5][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[6][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>



                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[7][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[8][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>



                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[9][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[10][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>

                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[11][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[12][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[13][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[14][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[15][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[16][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[17][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                   <tr align="left">
                     <td height = "20" style = "padding-bottom: 10px;">
                       <font face = "">
                         <?php
                             echo '<span style="font-weight: 400"> '.$disease_risk[18][1].'</span>';
                         ?>
                       </font>
                     </td>
                   </tr>


                                                                                                                                                                                                                                                                                                                                                                                                                               <!-- <tr align="left">
                     <td align = "top" align = "left">
                       <font face = "">
                         <ul>
                         /*<?php
                            for($i=1; $i<count($disease_risk); $i++)
                                  echo $disease_risk[$i][1] . "<br />";
                         ?>*/
                         </ul>
                       </font>
                     </td>
                   </tr> -->


                 </table>

                 <br><br>
                 <hr>
                 <p style="font-weight: 300;" align = "center">73</p>

          </div>



          <div class = "disease_top_left2">

               <img src= "../graph/綜合評估頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

          </div>



          <div class = "disease_title_last">
               <h1 align = "center" style="font-weight: 100;"><font size = "6">個人營養評估與生活飲食型態建議</font></h1>
          </div>



          <div class="disease_title">
             <table class="table_disease_tile_last">

              <tr>
                <th colspan = "3">
                  <font size = "5" style="font-weight: 300;" height="2s0">體重與熱量評估</font>
                  <hr color = #F7DC6F>
                </th>
              </tr>

              <tr align = "left">

                <td style="font-weight: 100;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  體重： <font size = "4" style="font-weight: 300;"><?php echo $membership[5][2] ?></font> &nbsp&nbsp&nbsp公斤</td>
                <td style="font-weight: 100;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  身高： <font size = "4" style="font-weight: 300;"><?php echo $membership[6][2] ?></font> &nbsp&nbsp&nbsp公分</td>
                <td style="font-weight: 100;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  BMI： <font size = "4" style="font-weight: 300;"><?php echo round($membership[5][2]/($membership[6][2]*$membership[6][2]*0.0001),1) ?></font></td>
              </tr>

              <tr align = "left">
                <td style="font-weight: 100;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  理想體重： <font size = "4" style="font-weight: 300;"><?php echo round(pow($membership[6][2]/100,2)*22*0.9, 0) . ' ~ ' . round(pow($membership[6][2]/100,2)*22*1.1, 0)?></font> &nbsp&nbsp&nbsp公斤</td>
                <td style="font-weight: 100;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  每日建議熱量：
                  <font size = "4" style="font-weight: 300;">
                    <?php $bmi =  round($membership[5][2]/($membership[6][2]*$membership[6][2]*0.0001),1);

                          if ($bmi >= 24){
                            echo $membership[5][2]*25;
                          } elseif ($bmi <= 18.5){
                            echo $membership[5][2]*35;
                          } else{
                            echo $membership[5][2]*30;
                          }
                    ?>
                  </font>
                  &nbsp&nbsp&nbsp大卡</td>
                <td style="font-weight: 100;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  每日建議水量： <font size = "4" style="font-weight: 300;"><?php echo $membership[5][2]*30 ?></font> &nbsp&nbsp&nbspc.c.</td>
              </tr>

            </table>


          </div>


          <div class="disease_detail4">

            <h3><font color = "#5DADE2" size = "6">&nbsp&nbsp&nbsp&nbsp| </font><font size = "5" style="font-weight: 300;">整體風險評估</font></h3>
            <p style="font-weight: 100;">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              您在下列疾病風險皆偏高，需注意避免接觸相關危險因子。是否容易罹患疾病有三種因素：個人基因體質、<br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              外界環境、個人生活習慣，這三個危險因素交互影響是疾病產生的主因，您已了解自己的基因體質，未來大<br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              江基因會協助您做正確且有效的健康管理，延緩或避免疾病的發生，以預防醫學的方式讓您擁有更好的生活<br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              品質、更長遠的生命。
            </p>




          <div class = 'disease_description_outer'>

            <table class="table_disease_description" FRAME="VOID" BORDER="2" RULES="ALL">

               <col width="120">
               <col width="700">


                <tr align="center">
                   <th height="15" scope=col>疾病</th>
                   <th height="15" scope=col>生活飲食型態建議</th>
                </tr>

                <tr align="center">

                   <td height="140" align = "center">
                       <font color = "#5DADE2">
                          <?php
                              echo $disease_risk[1][1];
                          ?>
                       </font>
                   </td>

                   <td height="140" align = "left">
                       <font style = "font-weight: 100px;">
                          <?php
                              echo '<span style="font-weight: 100"> '.$disease_risk[1][4].'</span>';
                          ?>
                       </font>
                   </td>

                 </tr>



                 <tr align="center">

                    <td height="140" align = "center">
                        <font color = "#5DADE2">
                           <?php
                               echo $disease_risk[2][1];
                           ?>
                        </font>
                    </td>

                    <td height="140" align = "left">
                        <font>
                           <?php
                               echo '<span style="font-weight: 100"> '.$disease_risk[2][4].'</span>';
                           ?>
                        </font>
                    </td>

                  </tr>


                  <tr align="center">

                     <td height="140" align = "center">
                         <font color = "#5DADE2">
                            <?php
                                echo $disease_risk[3][1];
                            ?>
                         </font>
                     </td>

                     <td height="140" align = "left">
                         <font>
                            <?php
                                echo '<span style="font-weight: 100"> '.$disease_risk[3][4].'</span>';
                            ?>
                         </font>
                     </td>

                   </tr>

             </table>

             <br>
             <hr>
             <p style="font-weight: 300;" align = "center">74</p>

          </div>
        </div>


        <div class = "disease_top2">

             <img src= "../graph/綜合評估頁首右.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

        </div>


        <br><br>

        <div class="disease_detail3">

          <br><br>
          <div class = "disease_description_outer2">



            <table class="table_disease_description" FRAME="VOID" BORDER="2" RULES="ALL">

                <col width="120">
                <col width="700">


                <tr align="center">
                   <th scope=col>疾病</th>
                   <th scope=col>生活飲食型態建議</th>
                </tr>

                <tr align="center">

                   <td height="171" align = "center">
                      <font color = "#5DADE2">
                          <?php
                              echo $disease_risk[4][1];
                          ?>
                      </font>
                   </td>

                   <td height="171" align = "left">
                       <font>
                           <?php
                               echo '<span style="font-weight: 100"> '.$disease_risk[4][4].'</span>';
                           ?>
                       </font>
                    </td>

                   </tr>


                   <tr align="center">

                      <td height="171" align = "center">
                         <font color = "#5DADE2">
                             <?php
                                 echo $disease_risk[5][1];
                             ?>
                         </font>
                      </td>

                      <td height="171" align = "left">
                          <font>
                              <?php
                                  echo '<span style="font-weight: 100"> '.$disease_risk[5][4].'</span>';
                              ?>
                          </font>
                       </td>

                      </tr>

                      <tr align="center">

                         <td height="171" align = "center">
                            <font color = "#5DADE2">
                                <?php
                                    echo $disease_risk[6][1];
                                ?>
                            </font>
                         </td>

                         <td height="171" align = "left">
                             <font>
                                 <?php
                                     echo '<span style="font-weight: 100"> '.$disease_risk[6][4].'</span>';
                                 ?>
                             </font>
                          </td>

                         </tr>

                         <tr align="center">

                            <td height="171" align = "center">
                               <font color = "#5DADE2">
                                   <?php
                                       echo $disease_risk[7][1];
                                   ?>
                               </font>
                            </td>

                            <td height="171" align = "left">
                                <font>
                                    <?php
                                        echo '<span style="font-weight: 100"> '.$disease_risk[7][4].'</span>';
                                    ?>
                                </font>
                             </td>

                            </tr>


                            <tr align="center">

                               <td height="171" align = "center">
                                  <font color = "#5DADE2">
                                      <?php
                                          echo $disease_risk[8][1];
                                      ?>
                                  </font>
                               </td>

                               <td height="171" align = "left">
                                   <font>
                                       <?php
                                           echo '<span style="font-weight: 100"> '.$disease_risk[8][4].'</span>';
                                       ?>
                                   </font>
                                </td>

                               </tr>

             </table>

             <br><br>
             <hr>
             <p style="font-weight: 300;" align = "center">75</p>

        </div>
      </div>


        <div class = "disease_top_left2">

             <img src= "../graph/綜合評估頁首左.png" alt= "tcigene_logo" align="middle" style="width:780px;height:100px;">

             <h1 align = "center" style="font-weight: 100;"><font size = "6">大江基因全檢特調建議</font></h1>

             <h4 align = "center" style="font-weight: 100;">(全品項皆由大江生醫股份有限公司製造)</h4>

        </div>



        <div class="disease_detail5">
          <br>
          <div class = "disease_description_outer3">
          <table class="table_disease_description" FRAME="VOID" BORDER="2" RULES="ALL">

             <col width="180">
             <col width="700">


              <tr align="center">
                 <th scope=col>保健品名</th>
                 <th scope=col>效用</th>
              </tr>

              <tr align="center">

                 <td height="130" align = "center">

                     <img src="<?php
                           $name1 = "../graph/特調_";
                           $name2 = $nutrient[1][1];
                           $name3 = ".jpg";
                           $name = $name1 . $name2 . $name3;
                           echo $name;
                     ?>" onerror="this.src='../graph/特調_空白.jpg'" style="width:100px;height:100px;">

                     <br>

                     <font color = "#5DADE2">
                        <?php
                            echo $nutrient[1][1];
                        ?>
                     </font>

                 </td>

                 <td height="130" align = "left">
                   <ul>
                     <font>
                        <?php
                            echo '<span style="font-weight: 100"> '.$nutrient[1][2].'</span>';
                        ?>
                     </font>
                   </ul>
                 </td>

               </tr>



               <tr align="center">

                  <td height="130" align = "center">

                      <img src="<?php
                            $name1 = "../graph/特調_";
                            $name2 = $nutrient[2][1];
                            $name3 = ".jpg";
                            $name = $name1 . $name2 . $name3;
                            echo $name;
                      ?>" onerror="this.src='../graph/特調_空白.jpg'" style="width:100px;height:100px;">

                      <br>

                      <font color = "#5DADE2">
                         <?php
                             echo $nutrient[2][1];
                         ?>
                      </font>

                  </td>

                  <td height="130" align = "left">
                    <ul>
                      <font>
                         <?php
                             echo '<span style="font-weight: 100"> '.$nutrient[2][2].'</span>';
                         ?>
                      </font>
                    </ul>
                  </td>

                </tr>


                <tr align="center">

                   <td height="130" align = "center">

                       <img src="<?php
                             $name1 = "../graph/特調_";
                             $name2 = $nutrient[3][1];
                             $name3 = ".jpg";
                             $name = $name1 . $name2 . $name3;
                             echo $name;
                       ?>" onerror="this.src='../graph/特調_空白.jpg'" style="width:100px;height:100px;">

                       <br>

                       <font color = "#5DADE2">
                          <?php
                              echo $nutrient[3][1];
                          ?>
                       </font>

                   </td>

                   <td height="130" align = "left">
                     <ul>
                       <font>
                          <?php
                              echo '<span style="font-weight: 100"> '.$nutrient[3][2].'</span>';
                          ?>
                       </font>
                     </ul>
                   </td>

                 </tr>


                 <tr align="center">

                    <td height="130" align = "center">

                        <img src="<?php
                              $name1 = "../graph/特調_";
                              $name2 = $nutrient[4][1];
                              $name3 = ".jpg";
                              $name = $name1 . $name2 . $name3;
                              echo $name;
                        ?>" onerror="this.src='../graph/特調_空白.jpg'" style="width:100px;height:100px;">

                        <br>

                        <font color = "#5DADE2">
                           <?php
                               echo $nutrient[4][1];
                           ?>
                        </font>

                    </td>

                    <td height="130" align = "left">
                      <ul>
                        <font>
                           <?php
                               echo '<span style="font-weight: 100"> '.$nutrient[4][2].'</span>';
                           ?>
                        </font>
                      </ul>
                    </td>

                  </tr>


                  <tr align="center">

                     <td height="130" align = "center">

                         <img src="<?php
                               $name1 = "../graph/特調_";
                               $name2 = $nutrient[5][1];
                               $name3 = ".jpg";
                               $name = $name1 . $name2 . $name3;
                               echo $name;
                         ?>" onerror="this.src='../graph/特調_空白.jpg'" style="width:100px;height:100px;">

                         <br>

                         <font color = "#5DADE2">
                            <?php
                                echo $nutrient[5][1];
                            ?>
                         </font>

                     </td>

                     <td height="130" align = "left">
                       <ul>
                         <font>
                            <?php
                                echo '<span style="font-weight: 100"> '.$nutrient[5][2].'</span>';
                            ?>
                         </font>
                       </ul>
                     </td>

                   </tr>


                   <tr align="center">

                      <td height="130" align = "center">

                          <img src="<?php
                                $name1 = "../graph/特調_";
                                $name2 = $nutrient[6][1];
                                $name3 = ".jpg";
                                $name = $name1 . $name2 . $name3;
                                echo $name;
                          ?>" onerror="this.src='../graph/特調_空白.jpg'" style="width:100px;height:100px;">

                          <br>

                          <font color = "#5DADE2">
                             <?php
                                 echo $nutrient[6][1];
                             ?>
                          </font>

                      </td>

                      <td height="130" align = "left">
                        <ul>
                          <font>
                             <?php
                                 echo '<span style="font-weight: 100"> '.$nutrient[6][2].'</span>';
                             ?>
                          </font>
                        </ul>
                      </td>

                    </tr>


           </table>

           <br>
           <hr>
           <p style="font-weight: 300;" align = "center">76</p>

        </div>
        </div>



        <div class = "public_page">

          <img src= "../graph/G2報告書_女_v6.2_範例書91.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

        </div>

        <div class = "public_page">

          <img src= "../graph/G2報告書_女_v6.2_範例書92.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

        </div>

        <div class = "public_page">

          <img src= "../graph/G2報告書_女_v6.2_範例書93.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

        </div>

        <div class = "public_page">

          <img src= "../graph/G2報告書_女_v6.2_範例書94.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

        </div>

        <div class = "public_page">

          <img src= "../graph/G2報告書_女_v6.2_範例書95.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

        </div>

        <div class = "public_page">

          <img src= "../graph/G2報告書_女_v6.2_範例書96.png" alt= "tcigene_logo" align="right" style="width:1020px;height:1420px;">

        </div>

</body>



</html>
