<!DOCTYPE html>
<html>
<head>
<style>

.overview {
  background-color: #E8F8F5;
  color: black;
  margin: 60px 30px 200px 20px;
  padding: 20px;

  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
}

.table_overview{

  background-color: white;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 2px solid #D5D8DC;

  table-layout: auto;
  width: 800px;
}


.disease_title {
  background-color: white;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
}

.table_disease_tile{
  background-color: #FCF3CF;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 1px solid #F7DC6F;

  table-layout: auto;
  width: 800px;

}




.disease_detail {
  background-color: #E8F8F5;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 0px solid #F7DC6F;

  table-layout: auto;
  width: 840px;
}

th.disease_detail{
  background-color: #117A65;
  color: white;
}

.table_disease_detail{
  background-color: white;
  color: black;
  margin: 20px;
  padding: 20px;
  border: 1px solid #D5D8DC;

  table-layout: auto;
  width: 800px;

}

.table_disease_detail th[scope=col]{
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #E8F8F5;
  color: black;

}




</style>
</head>

<body>

<?php

  // define the color
  $color_disease_ratio = "#3498DB";
  $color_lowrisk = "#F5B041";
  $color_highrisk = "#E74C3C";

  //read the disease risk file
  $filename = '/Users/hou/Desktop/tci/g2_auto/result/female_disease_ratio.csv';

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

?>


<?php

  // define the color
  $color_genolowrisk = "#F5B041";
  $color_genohighrisk = "#E74C3C";

  //read the disease risk file
  $filename = '/Users/hou/Desktop/tci/g2_auto/result/gene_risk.csv';

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

  echo $genotype[1][3];
  echo "<br>";
  echo $genotype[1][4];
  echo "<br>";
  echo $genotype[1][5];

?>



<div>
  <!-- 封面-->

  <h2>健康全檢基因檢測報告</h2>
  <p>會員編號：</p>
  <p>報告日期：</p>

  <br>
  <br>



</div>





<div class = "overview">


  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">新陳代謝相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>肥胖症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>第二型糖尿病</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>高血壓</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>高血脂</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>高尿酸血症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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



  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">心血管疾病相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>冠狀動脈疾病</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>心房顫動</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>腦中風</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>靜脈曲張</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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



  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">神經及骨骼退化相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>晚發型阿茲海默症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>帕金森氏症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>退化性關節炎</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>骨質疏鬆</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>肌少症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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




  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">婦科相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>子宮內膜異位</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>子宮肌瘤</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>多囊性卵巢症候群</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>女性尿道感染</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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


  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">自體免疫類相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>類風濕性關節炎</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>紅斑性狼瘡</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>自體免疫甲狀腺疾病</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>僵直性脊椎炎</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[22][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[22][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[22][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>





  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">肝膽腸胃相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>肝硬化</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>脂肪肝</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[24][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[24][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[24][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td>膽石症(肝內結石、膽結石)</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>消化性潰瘍、胃食道逆流</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>大腸息肉症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>胰臟炎</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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


  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">眼部老化相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>白內障</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>青光眼</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>黃斑部病變</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[31][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[31][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[31][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td>高度近視</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[32][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[32][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[32][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>



  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">精神疾病相關</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>憂鬱症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>躁鬱症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>思覺失調症</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[35][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[35][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[35][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>



  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">其他綜合類</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>慢性阻塞性肺病</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>攝護腺肥大</td>
      <td align = "center"><font color = "#A6ACAF">無</font></td>
      <td align = "center"><font size = "6"></font></td>
    </tr>

    <tr>
      <td>腎結石</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>腎衰竭</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>氣喘</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>過敏性鼻炎</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[40][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[40][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[40][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

      <tr>
      <td>異位性皮膚炎</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>乾癬</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>牙周病</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[43][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[43][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[43][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

  </table>





  <table class = "table_overview">

    <tr>
      <th colspan = "3" style="text-align: left">
        <font size = "5">癌症</font>

      </th>
    </tr>

    <tr>
      <th align = "left">項目</th>
      <th align = "center">您的風險程度</th>
      <th align = "center">與平均比較</th>
    </tr>

    <tr>
      <td>口腔癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>鼻咽癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>食道癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>肺癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>胃癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>肝癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>大腸癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
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
      <td>胰臟癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[51][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[51][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[51][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td>乳癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[52][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[52][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[52][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td>卵巢癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[53][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[53][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[53][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td>子宮頸癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[54][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[54][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[54][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td>攝護腺癌</td>
      <td align = "center"><font color = "#A6ACAF">無</font></td>
      <td align = "center"><font size = "6"></font></td>
    </tr>

    <tr>
      <td>膀胱癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[55][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[55][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[55][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>

    <tr>
      <td>淋巴癌</td>
      <td align = "center">
        <font face = "思源黑體 Normal">
          <?php echo '<div style="Color:'.(($disease_ratio[56][3] > 2) ? $color_highrisk : $color_lowrisk).'">'.$disease_ratio[56][2].'</div>';?>
        </font>
      </td>

      <td align = "center">
        <font face = "Avenir LT 55 Roman" size = "6">
          <?php echo '<div style="Color:'.$color_disease_ratio.'">'."{$disease_ratio[56][3]}倍".'</div>';?>
        </font>
      </td>
    </tr>
  </table>



</div>




<br>
<br>




<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col>
        <font size="4">肥胖症</font>
      </th>

      <th align="center" scope=col>
        <font size="4">盛行率</font>
      </th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>BMI(身體質量指數)超過27者，則達成人肥胖之定義。</li>
          <li>肥胖者較易罹患高血壓、糖尿病、高血脂症、睡眠呼吸中止症、冠<br>
              狀動脈心臟病、腦中風、膽結石及若干癌症，
              對健康有不良影響。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li align="center">成人過重及肥胖</li>
          <li align="center">
            <font size="8" color = "#5DADE2">38%</font>
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>


<br>
<br>



<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center" bgcolor = "#117A65">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "11">
        <font color = "#5DADE2">肥胖症</font>
      </th>

      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>內分泌調節相關：</li>
          <li>負責調控胰島素或雌激素的基因群。帶<br>
              有高風險基因型易因內分泌失調而增加<br>
              肥胖風險。</li>
        </ul>
      </th>

      <td>PPARG-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[8][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[8][3].'</div>';
                echo $genotype[8][2];
          ?>
        </font>
      </td>

    </tr>

    <tr align="center">
      <td>PPARG-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[1][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[1][3].'</div>';
                echo $genotype[1][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>ESR1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[9][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[9][3].'</div>';
                echo $genotype[9][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align="center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>調節新陳代謝：</li>
          <li>參與細胞能量代謝的基因群。帶有高風<br>
              險基因型之體內能量轉換的效能較弱，<br>
              新陳代謝下降，少吃也易胖。</li>
        </ul>
      </th>

      <td>FTO</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[7][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[7][3].'</div>';
                echo $genotype[7][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>USP3</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[4][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[4][3].'</div>';
                echo $genotype[4][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>ADRB2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[5][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[5][3].'</div>';
                echo $genotype[5][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align="center">
        <th rowspan = "3">
          <ul style="list-style-type:none; text-align: left">
            <li>參與食慾調控：</li>
            <li>攝食後飽足感與能量消耗有關。帶有高<br>
                風險基因型呈現食慾調控能力較差，不<br>
                易有飽足感，容易因吃過量而發胖。</li>
          </ul>
        </th>

        <td>MC4R</td>
        <td>TT</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[12][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[12][3].'</div>';
                  echo $genotype[12][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td>LEP</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[10][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[10][3].'</div>';
                echo $genotype[10][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>SDC3</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[3][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[3][3].'</div>';
                echo $genotype[3][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align="center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left">
            <li>參與脂肪合成與代謝：</li>
            <li>帶有高風險基因型群之脂肪分解能力較<br>
                差，造成脂肪囤積，特別是大腿、腹部<br>
                等部位。</li>
          </ul>
        </th>

        <td>GNB3</td>
        <td>CC</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[2][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[2][3].'</div>';
                  echo $genotype[2][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td>PPARGC1B</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[6][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[6][3].'</div>';
                echo $genotype[6][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>




<div class="disease_title">
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col>
        <font size="4">第二型糖尿病</font>
      </th>

      <th align="center" scope=col>
        <font size="4">盛行率</font>
      </th>
    </tr>

    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>糖尿病是一種慢性代謝異常疾病，主要原因是由於體內胰島素缺乏或功<br>
              能不全，對糖類的利用能力減低，甚至完全無法利用而造成血糖上升。
          </li>

          <li>糖尿病的分類有「胰島素依賴型」和「非胰島素依賴型」，第二型糖尿<br>
              病屬於後者;由於先天體質加上後天環境的因素如：肥胖、缺少運動、<br>
              壓力等，導致胰島素分泌不足及功能異常。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li align="center">成人</li>
          <li align="center">
            <font size="6" color = "#5DADE2">6~12%</font>
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>


<br>
<br>



<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "10">
        <font color = "#5DADE2">第二型<br>糖尿病</font>
      </th>

      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>影響胰島β細胞的發育與再生：</li>
          <li>胰島β細胞負責製造胰島素，帶有高風險<br>
              基因型易導致β細胞發育不良或不能發揮<br>
              作用，而讓胰島素分泌不足。</li>
        </ul>
      </th>

      <td>CDKAL1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[23][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[23][3].'</div>';
                echo $genotype[23][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>TCF7L2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[22][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[22][3].'</div>';
                echo $genotype[22][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>CDKN2A/B</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[24][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[24][3].'</div>';
                echo $genotype[24][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align="center">
      <td>SRR</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[25][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[25][3].'</div>';
                echo $genotype[25][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>HHEX</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[21][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[21][3].'</div>';
                echo $genotype[21][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>影響胰島素的分泌能力：</li>
          <li>胰島素幫助食物中的糖份能夠順利進入<br>
              身體細胞提供能量。帶有高風險基因型<br>
              可能因胰島素分泌效能不佳，使血糖過<br>
              高。
          </li>
        </ul>
      </th>

      <td align="center">SLC30A8</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[28][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[28][3].'</div>';
                echo $genotype[28][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>KCNJ11</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[27][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[27][3].'</div>';
                echo $genotype[27][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>KCNQ1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[26][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[26][3].'</div>';
                echo $genotype[26][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align="center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left">
            <li>影響胰島素的敏感性：</li>
            <li>帶有高風險基因型易出現「胰島素抗<br>
                性」，雖然胰島素分泌量夠卻無法被<br>
                身體有效利用。
            </li>
          </ul>
        </th>

        <td>PTPRD</td>
        <td>CC</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[29][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[29][3].'</div>';
                  echo $genotype[29][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td>PPARG</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[30][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[30][3].'</div>';
                echo $genotype[30][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>




<br>
<br>



<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col>
        <font size="4">高血壓</font>
      </th>

      <th align="center" scope=col>
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>高血壓是指收縮壓≧140mmHg或舒張壓≧90mmHg。</li>
          <li>成人正常血壓值為收縮壓≦120mmHg且舒張壓≦80mmHg。</li>
          <li>血壓介於正常和高血壓之間的稱為高血壓前期。</li>
          <li>數種疾病已被證實和高血壓密切相關：(一)中風 (二)冠狀動脈心臟病<br>
              (三)心臟衰竭 (四)腎臟病變。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>男性26%</li>
          <li>女性19%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">高血壓</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響血脂代謝及堆積：</li>
          <li>帶有高風險基因型易造成血管壁脂肪堆<br>
              積，血管壁增厚使得可供血液流動的血<br>
              管越來越細而造成高血壓的症狀。</li>
        </ul>
      </th>

      <td>NT5C2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[52][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[52][3].'</div>';
                echo $genotype[52][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>調節血管收縮的作用：</li>
          <li>帶有高風險基因型易造成體內血管收縮<br>
              素作用失衡，使小動脈壁肌肉經常性收<br>
              縮從而使血壓升高。
          </li>
        </ul>
      </th>

      <td>AGT</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[50][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[50][3].'</div>';
                echo $genotype[50][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>AGTR1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[51][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[51][3].'</div>';
                echo $genotype[51][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>NOS3</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[57][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[57][3].'</div>';
                echo $genotype[57][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>CALCA</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[58][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[58][3].'</div>';
                echo $genotype[58][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align="center">
        <th rowspan = "4">
          <ul style="list-style-type:none; text-align: left">
            <li>調節鈉離子與水分代謝：</li>
            <li>帶有高風險基因型會影響體內鈉離子的<br>
                代謝，造成體內水分滯留，促使血壓上<br>
                升。
            </li>
          </ul>
        </th>

        <td>ADD1</td>
        <td>GG</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[53][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[53][3].'</div>';
                  echo $genotype[53][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align="center">
      <td>FGF5</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[56][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[56][3].'</div>';
                echo $genotype[56][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align="center">
      <td>STK39</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[55][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[55][3].'</div>';
                echo $genotype[55][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align="center">
      <td>NEDD4L</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[54][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[54][3].'</div>';
                echo $genotype[54][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>




<br>
<br>


<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col>
        <font size="4">高血脂</font>
      </th>

      <th align="center" scope=col>
        <font size="4">盛行率</font>
      </th>
    </tr>




    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>血脂，指血液中的脂肪，主要包含「膽固醇」及「三酸甘油酯」。</li>
          <li>當血中之總膽固醇和三酸甘油酯，其中之一或兩者皆超過正常值<br>
              (>200mg/dl)時，即稱為高血脂症。
          </li>
          <li>高血脂症除會導致心臟疾病之外，也與腦中風、高血壓、糖尿病、腎病<br>
              等慢性疾病息息相關。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>全人口10.9%</li>
          <li>60歲以上超20%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "10">
        <font color = "#5DADE2">高血脂</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>調節肝臟脂質合成：</li>
          <li>帶有高風險基因型會增加體內三酸甘油<br>
              脂的合成量、加速膽固醇形成的速度，<br>
              造成血脂過高。
          </li>
        </ul>
      </th>

      <td>GCKR</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[66][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[66][3].'</div>';
                echo $genotype[66][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>GALNT2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[65][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[65][3].'</div>';
                echo $genotype[65][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HMGCR</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[67][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[67][3].'</div>';
                echo $genotype[67][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MLXIPL</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[68][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[68][3].'</div>';
                echo $genotype[68][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>參與脂質代謝：</li>
          <li>脂質在進入肝臟進行代謝之前，會先轉<br>
              化成脂蛋白。帶有高風險基因型易使轉<br>
              化作用無法順利進行，不被肝臟代謝，<br>
              造成血脂異常。
          </li>
        </ul>
      </th>

      <td>LPL</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[62][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[62][3].'</div>';
                echo $genotype[62][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>LIPC</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[63][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[63][3].'</div>';
                echo $genotype[63][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CETP</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[64][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[64][3].'</div>';
                echo $genotype[64][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
        <th rowspan = "3">
          <ul style="list-style-type:none; text-align: left">
            <li>協助血脂運送及辨識：</li>
            <li>膽固醇和三酸甘油脂是透過載脂蛋白運<br>
                送到體內各組織器官運用。帶有高風險<br>
                基因型易使載脂蛋白的運送功能產生缺<br>
                失，使血脂異常。
            </li>
          </ul>
        </th>

        <td>APOE</td>
        <td>CC</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[61][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[61][3].'</div>';
                  echo $genotype[61][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align = "center">
      <td>APOB</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[59][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[59][3].'</div>';
                echo $genotype[59][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>APOA5</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[60][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[60][3].'</div>';
                echo $genotype[60][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>



<br>
<br>





<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col>
        <font size="4">高尿酸血症</font>
      </th>

      <th align="center" scope=col>
        <font size="4">盛行率</font>
      </th>
    </tr>




    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>高尿酸血症是導致痛風的最重要因素，有高尿酸血症的病人，將來有<br>
              5-10%的人會發展成痛風。
          </li>
          <li>血中尿酸值大於7.0 mg/dl 為高尿酸血症，如果合併某些代謝異常<br>
              的共病症，如高血壓、肥胖、以及高血脂等，將提高痛風的發生率。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>男性42.1%</li>
          <li>女性27.4%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "8">
        <font color = "#5DADE2">高尿酸<br>血症</font>
      </th>


      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>尿酸排出的調節：</li>
          <li>帶有高風險基因型在腎臟或腸道排除尿<br>
              酸的功能異常，導致尿酸在體內累積。
          </li>
        </ul>
      </th>

      <td>ALPK1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[13][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[13][3].'</div>';
                echo $genotype[13][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MAOA-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[15][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[15][3].'</div>';
                echo $genotype[15][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MAOA-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[16][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[16][3].'</div>';
                echo $genotype[16][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ABCG2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[18][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[18][3].'</div>';
                echo $genotype[18][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>影響腎臟再吸收尿酸的效率：</li>
          <li>帶有高風險基因型會使得腎臟對於尿酸<br>
              的再吸收效率過快，導致血液中尿酸濃<br>
              度增加。
          </li>
        </ul>
      </th>

      <td>GLUT9</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[17][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[17][3].'</div>';
                echo $genotype[17][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>hURAT1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[20][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[20][3].'</div>';
                echo $genotype[20][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SLC2A9</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[19][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[19][3].'</div>';
                echo $genotype[19][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
        <th rowspan = "1">
          <ul style="list-style-type:none; text-align: left">
            <li>高尿酸易感基因：</li>
            <li>帶有高風險基因型可能因尿酸代謝異常<br>
                而影響尿酸在體內的濃度水平。
            </li>
          </ul>
        </th>

        <td>GCKR</td>
        <td>GG</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[14][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[14][3].'</div>';
                  echo $genotype[14][2];
            ?>
          </font>
        </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>


<br>
<br>




<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col>
        <font size="4">冠狀動脈疾病</font>
      </th>

      <th align="center" scope=col>
        <font size="4">盛行率</font>
      </th>
    </tr>




    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>冠狀動脈是輸送血液及氧氣到心臟的血管，當血管狹窄或阻塞造成心臟<br>
              缺氧的現象即屬冠狀動脈疾病;臨床上會出現胸痛或胸悶的症狀，也就<br>
              是心絞痛或狹心症。
          </li>
          <li>男性的罹患率為女性的4倍、但婦女於停經後罹患率會升高。</li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>2%~4%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "10">
        <font color = "#5DADE2">冠狀動<br>脈疾病</font>
      </th>




      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>影響血脂代謝與血管內皮細胞的通透性：</li>
          <li>帶有高風險基因型易出現低密度脂蛋白<br>
              膽固醇的聚積，使血管變夾狹窄而影響<br>

          </li>
        </ul>
      </th>

      <td>APOE</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[33][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[33][3].'</div>';
                echo $genotype[33][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>FADS1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[35][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[35][3].'</div>';
                echo $genotype[35][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>NFKBIL1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[38][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[38][3].'</div>';
                echo $genotype[38][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PSMA6</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[40][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[40][3].'</div>';
                echo $genotype[40][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫發炎反應：</li>
          <li>帶有高風險基因型易促使發炎相關基因<br>
              表現，進而一連串的誘發反應影響動脈<br>
              粥狀硬化的生成或惡化。
          </li>
        </ul>
      </th>

      <td>BRAP</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[31][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[31][3].'</div>';
                echo $genotype[31][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HFE</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[32][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[32][3].'</div>';
                echo $genotype[32][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>LTA-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[36][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[36][3].'</div>';
                echo $genotype[36][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>LTA-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[37][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[37][3].'</div>';
                echo $genotype[37][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left">
            <li>調節血管收縮的作用：</li>
            <li>帶有高風險基因型易造成體內血管收縮<br>
                素的含量及作用失衡，對於已經狹窄的<br>
                血管壁會因收縮異常而增加血管堵塞的<br>
                危險性。
            </li>
          </ul>
        </th>

        <td>AGTR1</td>
        <td>AA</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[34][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[34][3].'</div>';
                  echo $genotype[34][2];
            ?>
          </font>
        </td>
    </tr>


     <tr align = "center">
      <td>BAT1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[39][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[39][3].'</div>';
                echo $genotype[39][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>





<div class="disease_title" >
   <table class="table_disease_tile">


    <tr>
      <th align="center" scope=col>
        <font size="4">心房顫動</font>
      </th>

      <th align="center" scope=col>
        <font size="4">盛行率</font>
      </th>
    </tr>



    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>心房顫動是一種因為心臟內產生節律訊號的功能異常，導致心跳不規則<br>
              且經常過快的病症。罹患心房顫動可能不會有任何症狀，但也可能會出<br>
              現心悸、頭暈、疲倦、胸悶或喘不過氣等症狀。
          </li>
          <li>台灣的心房顫動病人發生中風的風險是一般人的8~10倍。</li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>全人口中1%</li>
          <li>隨年齡增加比例愈高</li>
          <li>60歲以上4%</li>
          <li>80歲以上10%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>



<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <font color = "#5DADE2">心房<br>顫動</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>心臟發育相關：</li>
          <li>帶有高風險基因型在心臟發育過程可能<br>
              出現調控失衡，進而造成心房顫動的發<br>
              生。
          </li>
        </ul>
      </th>

      <td>ZFHX3</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[43][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[43][3].'</div>';
                echo $genotype[43][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>參與訊息傳導：</li>
          <li>帶有高風險基因型易使細胞內鈣離子濃<br>
              度持續上升的現象，造成心房顫動。
          </li>
        </ul>
      </th>

      <td>AGT</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[44][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[44][3].'</div>';
                echo $genotype[44][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
        <th rowspan = "2">
          <ul style="list-style-type:none; text-align: left">
            <li>鉀離子通道調控蛋白：</li>
            <li>鉀離子通道調控蛋白參與心房肌電生理<br>
                功能之正常運作。帶有高風險基因型可<br>
                能使鉀離子通道活性失衡而引起心房顫<br>
                動的發生。
            </li>
          </ul>
        </th>

        <td>KCNN3</td>
        <td>CC</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[41][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[41][3].'</div>';
                  echo $genotype[41][2];
            ?>
          </font>
        </td>
    </tr>


     <tr align = "center">
      <td>KCNE1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[42][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[42][3].'</div>';
                echo $genotype[42][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>腦中風</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>腦中風常常是急性發作，是指腦部血管發生病變，以致血管突然破裂(腦<br>
              內出血)或堵塞(腦梗塞)，使腦部功能缺損，若不即時接受有效的醫治，<br>
              將會殘留中至重度殘障。
          </li>
          <li>腦中風目前佔台灣地區死亡原因的第三位。中風後患者之肢體殘障及言語<br>
              問題，需人長期照顧，是成人殘障的第一號殺手。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>36歲以上</li>
          <li>1.64%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "5">
        <font color = "#5DADE2">腦中風</font>
      </th>



      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>參與脂質代謝、運送及辨識：</li>
          <li>動脈狹窄是造成梗塞性腦中風的重要原<br>
              醇等脂肪物質在血管內壁積聚，導致血<br>
              管變窄或完全阻塞不通。
          </li>
        </ul>
      </th>

      <td>ZNF650</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[45][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[45][3].'</div>';
                echo $genotype[45][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>FGFR4</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[47][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[47][3].'</div>';
                echo $genotype[47][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>腦血管壁承受壓力的調節：<li>
          <li>當帶有高風險基因型，血管壁承受壓力<br>
              能力較差；腦血管容易因血壓上升時，<br>
              產生血管破裂而導致腦出血。
          </li>
        </ul>
      </th>

      <td>KCNK17</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[48][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[48][3].'</div>';
                echo $genotype[48][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>AGT</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[46][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[46][3].'</div>';
                echo $genotype[46][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>COL1A2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[49][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[49][3].'</div>';
                echo $genotype[49][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>



<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>靜脈曲張</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>靜脈曲張為靜脈血管受到非正常血液的長期壓迫，造成管內瓣膜功能受<br>
              損，使得血管內積壓過量血液，導致血管壁變薄及血管突出。外部表現<br>
              通常為突出的靜脈，內部表現為血栓的形成。為不可恢復的反應。
          </li>
          <li>此疾病成因目前認為與久站、遺傳、懷孕、過胖、先天性瓣膜異常有關。</li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>男性</li>
          <li>10%~20%</li>
          <li>女性</li>
          <li>25%~33%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "3">
        <font color = "#5DADE2">靜脈<br>曲張</font>
      </th>



      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響血管新生：</li>
          <li>帶有高風險基因，代表會影響血管內皮<br>
              層細胞不穩定性增加，使血管內皮層細<br>
              胞移動與增生增加，促進血管新生。
          </li>
        </ul>
      </th>

      <td>MTHFR-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[449][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[449][3].'</div>';
                echo $genotype[449][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>MTHFR-2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[450][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[450][3].'</div>';
                echo $genotype[450][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響血液循環：<li>
          <li>帶有高風險基因，會影響血液累積在血<br>
              管，導致血管壁變薄。
          </li>
        </ul>
      </th>

      <td>HFE</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[448][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[448][3].'</div>';
                echo $genotype[448][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>晚發型阿茲海默症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
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


      <td>
        <ul style="list-style-type:none;">
          <li>60歲以上的人口約</li>
          <li>4%~5%</li>
          <li>隨年齡增加罹病的比例</li>
          <li>愈高，每增加10歲盛行</li>
          <li>率變兩倍</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "5">
        <font color = "#5DADE2">晚發型<br>阿茲海<br>默症</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>神經元的活性調節:</li>
          <li>帶有高風險基因型可能使星形膠質細胞<br>
              的生長及修復功能變異，並對對細胞信<br>
              號傳導及神經元活性產生影響。
          </li>
        </ul>
      </th>

      <td>APOE</td>
      <td>E2/E2<br>E2/E3<br>E3/E3</td>
      <td>AG</td>
    </tr>

     <tr align = "center">
      <td>SLC2A14</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[98][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[98][3].'</div>';
                echo $genotype[98][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>GAB2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[96][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[96][3].'</div>';
                echo $genotype[96][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>調控神經元的代謝：<li>
          <li>帶有高風險基因容易形成神經纖維糾結<br>
              及神經元外形成斑塊樣的團塊堆積，造<br>
              成神經細胞內的運送系統崩壞，進而導<br>
              致神經細胞死亡。
          </li>
        </ul>
      </th>

      <td>MS4A6A</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[97][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[97][3].'</div>';
                echo $genotype[97][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>GSK3B</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[99][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[99][3].'</div>';
                echo $genotype[99][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>帕金森氏症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>帕金森氏症是老年人的三大腦病之一，通常患者是在50~60歲發病，而<br>
              診斷時的平均年齡是60歲。<br>
          </li>
          <li>帕金森氏症是一種慢性的中樞神經系統退化性失調，它會損害患者的動<br>
              作技能、語言能力以及其他功能。主要症狀有：(一)四肢顫抖 (二)四<br>
              肢僵硬 (三)動作遲緩，這種病症會逐漸惡化，大約五到十年內可能會<br>
              障。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>60歲以上的人口約</li>
          <li>約1%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">帕金<br>森氏症</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>神經元生的存活及發育：<li>
          <li>帶有高風險基因型會因為生長因子、轉<br>
              錄調控、DNA甲基化等作用失衡，影響<br>
              神經元的存活及發育。
          </li>
        </ul>
      </th>

      <td>LRRK2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[107][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[107][3].'</div>';
                echo $genotype[107][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>GSK3b</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[108][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[108][3].'</div>';
                echo $genotype[108][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MTHFR</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[103][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[103][3].'</div>';
                echo $genotype[103][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>神經元蛋白質的代謝：<li>
          <li>帶有高風險基因會造成α-synuclein<br>
              蛋白質的結構異常而無法被正常代謝，<br>
              造成過量累積，導致神經細胞毒性及死<br>
              亡。
          </li>
        </ul>
      </th>

      <td>SNCA-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[104][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[104][3].'</div>';
                echo $genotype[104][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SNCA-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[105][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[105][3].'</div>';
                echo $genotype[105][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>MAPT</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[100][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[100][3].'</div>';
                echo $genotype[100][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>GAK</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[101][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[101][3].'</div>';
                echo $genotype[101][2];
          ?>
        </font>
      </td>
    </tr>




     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫調節相關：<li>
          <li>帶有高風險基因型會引起過度發炎反<br>
              應，會使得腦部神經細胞持續損傷。
          </li>
        </ul>
      </th>

      <td>TNF-α</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[106][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[106][3].'</div>';
                echo $genotype[106][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HLA</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[102][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[102][3].'</div>';
                echo $genotype[102][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>退化性關節炎</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>退化性關節炎是人類關節疾病中最普通的一種，跟年齡老化有直接的關<br>
              聯。主要的症狀是疼痛、僵硬、腫大和變形，在活動關節時，常可聽到<br>
              不正常的摩擦聲響。
          </li>
          <li>較早期的症狀包含膝部酸痛無力，硬緊不靈活，蹲下後不易站起來。症<br>
              狀加重時，則出現蹲下疼痛有困難，膝關節漸變型無法走遠路，夜裏睡<br>
              覺時膝部會酸痛，步態左右搖擺，需要他人幫忙。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>50歲以上7%</li>
          <li>60歲以上11%</li>
          <li>女性罹患率是男性的2倍</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">退化性<br>關節炎</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>影響軟骨細胞的生成作用：<li>
          <li>帶有高風險基因型會出現軟骨細胞對生<br>
              長因子的作用能力下降，進而減少膠原<br>
              蛋白和軟骨的生成量，增加退化性關炎<br>
              的發生。
          </li>
        </ul>
      </th>

      <td>DVWA</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[118][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[118][3].'</div>';
                echo $genotype[118][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>GDF5</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[119][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[119][3].'</div>';
                echo $genotype[119][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>LPAR1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[120][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[120][3].'</div>';
                echo $genotype[120][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SMAD3</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[121][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[121][3].'</div>';
                echo $genotype[121][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>參與軟骨組織的代謝調控：<li>
          <li>帶有高風險基因型容易出現發炎反應或<br>
              分解軟骨的酵素活性過高，使關節的軟<br>
              骨受到破壞，增加退化性關節炎的發生<br>
              。
          </li>
        </ul>
      </th>

      <td>ADAMTS5</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[117][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[117][3].'</div>';
                echo $genotype[117][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TLR3</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[122][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[122][3].'</div>';
                echo $genotype[122][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center" >
      <td>IL1B-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[123][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[123][3].'</div>';
                echo $genotype[123][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL1B-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[124][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[124][3].'</div>';
                echo $genotype[124][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>TNF-α</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[116][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[116][3].'</div>';
                echo $genotype[116][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>





 <div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>骨質疏鬆</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>骨質疏鬆症為一種全身骨骼疾病，其特徵包含骨量減少、骨組織的顯微<br>
              結構變差，造成骨骼脆弱，骨折危險性增高。目前臨床上主要根據骨密<br>
              度測量值診斷骨質疏鬆症。
          </li>
          <li>骨質疏鬆症多數情況下並不會直接導致死亡，但發生骨折機會提高，從<br>
              而影響病患的健康和獨立生活的能力。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>50歲以上：</li>
          <li>男性1.6%</li>
          <li>女性11.4%</li>
          <li>(停經後婦女骨質疏鬆</li>
          <li>盛行率30%)</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





 <div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "7">
        <font color = "#5DADE2">骨質<br>疏鬆</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響骨骼中膠原蛋白生成：<li>
          <li>骨骼內需要膠原蛋白讓鈣離子和骨細胞<br>
              能更緊密地結合。帶有高風險基因型易<br>
              出現膠原蛋白生成降低，使鈣質容易流<br>
              失，骨質密度下降。
          </li>
        </ul>
      </th>

      <td>ALDH7A1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[109][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[109][3].'</div>';
                echo $genotype[109][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MTHFR</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[110][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[110][3].'</div>';
                echo $genotype[110][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>促進骨骼再吸收作用：<li>
          <li>帶有高風險基因型會呈現蝕骨細胞活性<br>
              增加、造骨細胞活性降低，導致體內骨<br>
              骼密度減少。
          </li>
        </ul>
      </th>

      <td>ESRa</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[111][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[111][3].'</div>';
                echo $genotype[111][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ESR1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[112][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[112][3].'</div>';
                echo $genotype[112][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>SOST</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[113][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[113][3].'</div>';
                echo $genotype[113][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>VDR</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[114][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[114][3].'</div>';
                echo $genotype[114][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>骨骼生成速率降低：<li>
          <li>帶有高風險基因型會導致造骨細胞發育<br>
              受到抑制，進而減少骨骼生成，增加骨<br>
              質疏鬆症可能性。
          </li>
        </ul>
      </th>

      <td>GREM2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[115][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[115][3].'</div>';
                echo $genotype[115][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>


</div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>肌少症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>肌少症顧名思義，即為骨骼肌的流失，被認為是老年病症候群的表現之<br>
              一。
          </li>
          <li>肌少症患者在生理與疾病上有許多不良影響，包含失能、較差的下肢功<br>
              能、代謝症候群、心血管風險等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>60歲以上老年人族群中</li>
          <li>約10~25%</li>
          <li>其盛行率隨年紀而增加</li>
        </ul>
      </td>

    </tr>

  </table>


</div>





 <div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <font color = "#5DADE2">肌少症</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>身體肌肉質量：<li>
          <li>帶有高風險基因型，在肌肉形成上的關<br>
              鍵因子肌動蛋白的強度上與肌肉彈性會<br>
              有減少，可能造成肌肉質量減少。
          </li>
        </ul>
      </th>

      <td>ACTN3</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[416][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[416][3].'</div>';
                echo $genotype[416][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>COL1A1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[417][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[417][3].'</div>';
                echo $genotype[417][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>身體肌肉強度：<li>
          <li>帶有高風險基因，代表在細胞接收維他<br>
              命D的能力減少，會影響肌肉細胞粒線<br>
              體活性，可能降低肌肉強度。
          </li>
        </ul>
      </th>

      <td>VDR-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[418][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[418][3].'</div>';
                echo $genotype[418][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>VDR-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[419][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[419][3].'</div>';
                echo $genotype[419][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

</div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>子宮內膜異位</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>子宮內膜異位症就是子宮內膜細胞生長在子宮腔以外的地方，例如骨盆<br>
              腔內的腹膜、卵巢和膀胱等。
          </li>
          <li>子宮內膜異位症是女性經痛的主要原因之一，且對婦女懷孕率有相當不<br>
              良的影響。患者常因經痛或不孕的問題，容易出現憂鬱症的現象。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>所有婦女中</li>
          <li>6~10%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">子宮內<br>膜異位</font>
      </th>



      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫調節相關：<li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，使代謝紊<br>
              亂以致影響子宮內膜異位生長。
          </li>
        </ul>
      </th>

      <td>IL1A-1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[194][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[194][3].'</div>';
                echo $genotype[194][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL1A-3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[195][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[195][3].'</div>';
                echo $genotype[195][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL1A-4</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[196][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[196][3].'</div>';
                echo $genotype[196][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞生長調控：<li>
          <li>帶有高風險基因型在調控細胞生長的機<br>
              制失衡，誘發子宮內膜細胞生長於子宮<br>
              腔以外的地方，導致子宮內膜異位。
          </li>
        </ul>
      </th>

      <td>P53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[193][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[193][3].'</div>';
                echo $genotype[193][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ZYG11B</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[199][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[199][3].'</div>';
                echo $genotype[199][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CDKN2BAS</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[197][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[197][3].'</div>';
                echo $genotype[197][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>BTBD9</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[200][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[200][3].'</div>';
                echo $genotype[200][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ANKFN1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[201][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[201][3].'</div>';
                echo $genotype[201][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>雌激素活性調節：<li>
          <li>帶有高風險基因型可能因持續性的雌激<br>
              素異常作用，使子宮內膜細胞不正常的<br>
              增殖。
          </li>
        </ul>
      </th>

      <td>WNT4</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[198][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[198][3].'</div>';
                echo $genotype[198][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>子宮肌瘤</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>子宮肌瘤就是子宮長有肉瘤，是婦科最常見的一種良性腫瘤，惡性的比<br>
              例不到百分之一，多數人的症狀並不明顯。
          </li>
          <li>臨床最常見的症狀是月經量增加，還可能會有骨盆腔的慢性疼痛，例<br>
              如:痛經、性交疼痛等;若是肌瘤太大，壓迫到泌尿系統，可能造成頻<br>
              尿、解尿困難，或是腎積水;壓迫到腸子，則可能造成阻塞或便秘。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>生育年齡婦女</li>
          <li>20%</li>
          <li>40歲以上的婦女</li>
          <li>40~50%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "6">
        <font color = "#5DADE2">子宮<br>肌瘤</font>
      </th>




      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復能力：<li>
          <li>帶有高風險基因型會影響鹼基切除修復<br>
              (BER)的調控作用，使DNA損傷造成的<br>
              異常逐漸在體內累積，產生細胞變異。
          </li>
        </ul>
      </th>

      <td>XRCC1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[204][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[204][3].'</div>';
                echo $genotype[204][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>參與細胞生長的調控：<li>
          <li>帶有高風險基因型易出現子宮平滑肌和<br>
              結締組織纖維異常增殖，導致子宮肌瘤<br>
              。
          </li>
        </ul>
      </th>

      <td>ESR1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[202][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[202][3].'</div>';
                echo $genotype[202][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PDCD6-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[205][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[205][3].'</div>';
                echo $genotype[205][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PDCD6-3</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[206][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[206][3].'</div>';
                echo $genotype[206][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：<li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，進而對細<br>
              胞的正常運作功能產生影響。
          </li>
        </ul>
      </th>

      <td>AIRE</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[203][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[203][3].'</div>';
                echo $genotype[203][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>CYP1A1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[207][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[207][3].'</div>';
                echo $genotype[207][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>多囊性卵巢症候群</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>多囊性卵巢症候群從超音波可看到卵巢腫大，卵巢出現許多小的卵泡<br>
              看起來像是小囊腫，是生殖年齡婦女最為常見的內分泌疾病。
          </li>
          <li>常見的症狀包含月經稀少、肥胖、不孕症、與男性和荷爾蒙太高的表<br>
              現，例如：多毛症，青春痘很多等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>生育年齡婦女</li>
          <li>40~50%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "10">
        <font color = "#5DADE2">多囊性<br>卵巢症<br>候群</font>
      </th>




      <th rowspan = "6">
        <ul style="list-style-type:none; text-align: left">
          <li>參與性荷爾蒙的分泌調節：<li>
          <li>負責促性腺激素釋放激素(GnRH)、黃體<br>
              激素、雄性激素等分泌平衡。帶有高風<br>
              險基因型易發生卵巢鞘膜細胞產生過多<br>
              的雄性激素，以致不能發育成熟的濾泡<br>
              還是以小囊的型式存在卵巢內，造成多<br>
              囊性卵巢。
          </li>
        </ul>
      </th>

      <td>LHCGR-<br>STON1-<br>GTF2A1L</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[210][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[210][3].'</div>';
                echo $genotype[210][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>YAP1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[212][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[212][3].'</div>';
                echo $genotype[212][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>C9orf3-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[214][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[214][3].'</div>';
                echo $genotype[214][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>C9orf3-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[215][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[215][3].'</div>';
                echo $genotype[215][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>FSHR-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[216][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[216][3].'</div>';
                echo $genotype[216][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>FSHR-2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[217][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[217][3].'</div>';
                echo $genotype[217][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>影響胰島素或胰島素敏感性：<li>
          <li>帶有高風險基因型易發生胰島素阻抗現<br>
              象，而血中過高的胰島素會促使濾泡細<br>
              胞分泌雄性激素，以致不能發育成熟的<br>
              濾泡還是以小囊的型式存在卵巢內，造<br>
              成多囊性卵巢。
          </li>
        </ul>
      </th>

      <td>THADA-1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[208][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[208][3].'</div>';
                echo $genotype[208][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>THADA-2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[209][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[209][3].'</div>';
                echo $genotype[209][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SUOX</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[211][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[211][3].'</div>';
                echo $genotype[211][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>HMGA2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[213][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[213][3].'</div>';
                echo $genotype[213][2];
          ?>
        </font>
      </td>
    </tr>




  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>女性尿道感染</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>女性尿道感染發生主因為女性的尿道較短(五公分)，且尿道口接近陰<br>
              道口及肛門，衛生環境不注意時，細菌容易感染至膀胱或逆流至腎臟<br>
              造成感染。另外孕婦更容易得到女性尿道感染，因懷孕時子宮及胎兒<br>
              會漸漸壓迫膀胱，如尿中有細菌的情形，就容易引起尿道感染。更年<br>
              期陰道上皮細胞萎縮，好菌(乳酸桿菌)不易繁殖，陰道無法維持酸鹼<br>
              度，致使容易有細菌附著在生殖泌尿道口。因此女性尿道感染，反覆<br>
              發生很常見。
          </li>
          <li>如果沒有適當的治療或是延誤就醫，就有可能發展成為急性腎盂腎炎。</li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>少女約為2%</li>
          <li>婚後女性約為5％</li>
          <li>七十歲之後女性</li>
          <li>尿道感染之盛行</li>
          <li>率約增加至10%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "3">
        <font color = "#5DADE2">女性尿<br>道感染</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫抵抗能力：<li>
          <li>影響免疫細胞對抗病源菌誘發的免疫反<br>
              應。如高風險時代表泌尿道系統的免疫<br>
              反應在對抗病源菌時，其反應與一般人<br>
              比較差，因而帶有較高的風險。
          </li>
        </ul>
      </th>

      <td>IL6</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[429][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[429][3].'</div>';
                echo $genotype[429][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>TLR5</td>
      <td>GG</td>
        <td align = "center">
          <font face = "">
            <?php echo '<div style="Color:'.(($genotype[430][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[430][3].'</div>';
                  echo $genotype[430][2];
            ?>
          </font>
        </td>
    </tr>

    <tr align = "center">
      <td>TLR4</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[431][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[431][3].'</div>';
                echo $genotype[431][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>



 <div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>類風濕性關節炎</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>類風濕性關節炎，是一種由自身免疫障礙引致免疫系統攻擊自己體內<br>
              的正常組織，通常是從關節組織開始侵犯，尤其是手部關節。
          </li>
          <li>長期的慢性炎症會造成關節變形直至殘廢，並會因關節痛楚及磨損而<br>
              失去部分的活動能力。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>0.4%</li>
          <li>女性罹患率是</li>
          <li>男性2~3倍</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "8">
        <font color = "#5DADE2">類風<br>濕性<br>關節炎</font>
      </th>



      <th rowspan = "8">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：<li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙。
          </li>
        </ul>
      </th>

      <td>CTL4</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[73][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[73][3].'</div>';
                echo $genotype[73][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>HLA</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[74][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[74][3].'</div>';
                echo $genotype[74][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PADI4</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[75][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[75][3].'</div>';
                echo $genotype[75][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>FCRL3</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[76][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[76][3].'</div>';
                echo $genotype[76][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CD244-1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[77][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[77][3].'</div>';
                echo $genotype[77][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CD244-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[78][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[78][3].'</div>';
                echo $genotype[78][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IRAK1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[79][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[79][3].'</div>';
                echo $genotype[79][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>APOM</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[80][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[80][3].'</div>';
                echo $genotype[80][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>紅斑性狼瘡</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>是一種慢性發炎性疾病，可能侵犯皮膚、關節、腎臟、肺臟、<br>
              神經系統其他器官或系統，任何年齡的人都可能得到紅斑性狼<br>
              瘡，但通常發生於20~40歲年輕女性。
          </li>
          <li>以發生的頻率來說，約90%以上的人會關節痛或關節炎，70~<br>
              80%的人有皮膚紅斑或盤狀紅斑，40~50%有肋膜炎或包膜炎<br>
              ，40~50%的患者會發生狼瘡腎炎，20~60%患者有中樞神經<br>
              侵犯，約60%患者有白血球低下，20%患者有血小板低下。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>0.06%</li>
          <li>女性罹患率是</li>
          <li>男性8.5倍</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "8">
        <font color = "#5DADE2">紅斑<br>性狼瘡</font>
      </th>



      <th rowspan = "8">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：<li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成血<br>
              管及結締組織炎症。
          </li>
        </ul>
      </th>

      <td>IRF5</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[81][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[81][3].'</div>';
                echo $genotype[81][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>ITPR3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[82][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[82][3].'</div>';
                echo $genotype[82][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TNXB</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[83][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[83][3].'</div>';
                echo $genotype[83][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>STAT4</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[84][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[84][3].'</div>';
                echo $genotype[84][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CD40</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[85][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[85][3].'</div>';
                echo $genotype[85][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>AFF3</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[86][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[86][3].'</div>';
                echo $genotype[86][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TNFAIP3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[87][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[87][3].'</div>';
                echo $genotype[87][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ITGAM</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[88][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[88][3].'</div>';
                echo $genotype[88][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>自體免疫甲狀腺疾病</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>是由血液中不正常的高濃度抗甲狀腺抗體，造成甲狀腺細胞發<br>
              炎破壞，病程及嚴重程度因人而異。發病早期大部分病人症無<br>
              症狀，少數會出現甲狀腺功能亢進，晚期約10%患者繪出現甲<br>
              狀腺功能低下，影響全身器官。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>0.8～1.2%</li>
          <li>女性罹患率是</li>
          <li>男性8~9%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "5">
        <font color = "#5DADE2">自體免<br>疫甲狀<br>腺疾病</font>
      </th>



      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：<li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，進而引<br>
              起長期的甲狀腺發炎。
          </li>
        </ul>
      </th>

      <td>TNF-α</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[92][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[92][3].'</div>';
                echo $genotype[92][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>CTL4</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[89][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[89][3].'</div>';
                echo $genotype[89][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>VDR</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[93][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[93][3].'</div>';
                echo $genotype[93][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>TSHR-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[90][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[90][3].'</div>';
                echo $genotype[90][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TSHR2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[91][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[91][3].'</div>';
                echo $genotype[91][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>僵直性脊椎炎</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>是一種慢性全身性疾病，臨床症狀是背痛、僵硬和疲勞，有些<br>
              病患症狀會好，有些有持續性脊椎疾病和脊椎以外症狀，例如<br>
              眼睛虹膜炎、心瓣膜炎、心傳導系統障礙、大動脈瓣膜炎...<br>
              等。好發於男性20歲至40歲比例高於女性，且男性之脊椎病<br>
              變較嚴重。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>0.2%</li>
          <li>男性罹患率是</li>
          <li>女性2.7%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <font color = "#5DADE2">僵直性<br>脊椎炎</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：<li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，以致脊<br>
              椎韌帶和中軸關節自體發炎，與關節軟<br>
              組織（包括：軟骨、韌帶、肌腱）的硬<br>
              化及鈣化有關聯。
          </li>
        </ul>
      </th>

      <td>ANKH</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[69][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[69][3].'</div>';
                echo $genotype[69][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>PDCD</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[70][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[70][3].'</div>';
                echo $genotype[70][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ERAP1-1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[71][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[71][3].'</div>';
                echo $genotype[71][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>2q51</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[72][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[72][3].'</div>';
                echo $genotype[72][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>肝硬化</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>肝臟細胞、組織及血管受到病毒、酒精或其它因素破壞，使肝<br>
              臟產生纖維化及結節，稱為肝硬化。肝硬化是不可逆的，除非<br>
              是接受肝臟移植，否則情形是無法好轉。
          </li>
          <li>肝硬化可怕的地方在於它的併發症：食道靜脈曲張、肝昏迷(<br>
              肝性腦病變)、腹水(有時併發腹膜炎)，同時肝硬化的病人，<br>
              有機會會轉變成為肝癌。
          </li>
          <li>造成肝硬化的原因，在台灣以B型肝炎及C型肝炎為主要元凶<br>
              ，尤其B肝約佔70~80%，C肝約佔10~20%。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>B肝17.3%</li>
          <li>C肝4.4%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">肝硬化</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>影響肝細胞生長：<li>
          <li>帶有高風險基因型之肝纖維組織與再生<br>
              結節細胞的生長調控呈現異常，使得肝<br>
              臟變硬，導致肝硬化。
          </li>
        </ul>
      </th>

      <td>ALDH2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[155][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[155][3].'</div>';
                echo $genotype[155][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>miR-146a</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[149][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[149][3].'</div>';
                echo $genotype[149][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ESR1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[150][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[150][3].'</div>';
                echo $genotype[150][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>TRPM5</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[151][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[151][3].'</div>';
                echo $genotype[151][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：<li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，引起肝臟<br>
              長期發炎與壞死。
          </li>
        </ul>
      </th>

      <td>PTGS2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[147][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[147][3].'</div>';
                echo $genotype[147][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MIF</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[148][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[148][3].'</div>';
                echo $genotype[148][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>GRP78</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[152][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[152][3].'</div>';
                echo $genotype[152][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>HLA-DP</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[153][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[153][3].'</div>';
                echo $genotype[153][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL-8</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[154][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[154][3].'</div>';
                echo $genotype[154][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>脂肪肝</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>肝臟內的脂肪過量堆積。當經常攝入過量的高脂飲食或當肝細<br>
              細胞受損傷(如藥物、嗜酒、病毒性肝炎等引起)而不能夠發揮<br>
              正常脂肪的代謝功能時，使肝細胞內的脂肪儲量逐漸增多，形<br>
              成脂肪肝。
          </li>
          <li>一般的脂肪肝大都屬於良性疾病，不會引起肝硬化或肝癌，但<br>
              若長期酗酒引起的脂肪肝，則會使肝臟受損，最後仍可能發展<br>
              成肝硬化。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>成人約</li>
          <li>30%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">脂肪肝</font>
      </th>




      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>影響肝臟脂質合成：<li>
          <li>帶有高風險基因型易發生肝細胞內脂質<br>
              合成的調控路徑異常，引起脂肪堆積。
          </li>
        </ul>
      </th>

      <td>PNPLA3</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[156][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[156][3].'</div>';
                echo $genotype[156][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>GCKR</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[159][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[159][3].'</div>';
                echo $genotype[159][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PPARG</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[160][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[160][3].'</div>';
                echo $genotype[160][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>AGTR1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[164][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[164][3].'</div>';
                echo $genotype[164][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>FABP1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[162][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[162][3].'</div>';
                echo $genotype[162][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>參與脂質運送及辨識：<li>
          <li>帶有高風險基因型易使肝內運脂蛋白作<br>
              用異常，導致脂質堆積。
          </li>
        </ul>
      </th>

      <td>MTP-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[157][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[157][3].'</div>';
                echo $genotype[157][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>MTP-2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[158][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[158][3].'</div>';
                echo $genotype[158][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>LIPC</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[163][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[163][3].'</div>';
                echo $genotype[163][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：<li>
          <li>帶有高風險基因型會使肝細胞產生慢性<br>
              發炎反應，長期對於反覆的脂肪變性、<br>
              壞死和再生造成影響，嚴重者亦可能進<br>
              展成肝臟纖維化。
          </li>
        </ul>
      </th>

      <td>PTGS2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[161][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[161][3].'</div>';
                echo $genotype[161][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>膽石症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>膽石症是包含結石發生在肝內膽管、膽囊或膽總管，是最常見的膽道疾<br>
              病。
          </li>
          <li>膽結石可能無症狀，但也可能會引發不適，初始症狀會產生上腹部的發<br>
              脹、噁心、嘔吐等現象，發作時則是劇烈的上腹部疼痛、黃疸，有時會<br>
              有發燒症狀。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>5~10%</li>
          <li>(大於50歲：11.25%;</li>
          <li>大於65歲：15%~20%;</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">膽石症</font>
      </th>


      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響膽汁內膽固醇的代謝：</li>
          <li>帶有高風險基因型易出現膽固醇代謝失<br>
              調，影響膽汁中膽鹽、卵磷脂和膽固醇<br>
              三者之間的比例，容易形成膽固醇結晶<br>
              ，進而導致膽結石。
          </li>
        </ul>
      </th>

      <td>ABCG8</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[165][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[165][3].'</div>';
                echo $genotype[165][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>APOE</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[166][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[166][3].'</div>';
                echo $genotype[166][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響膽汁中的水份含量：</li>
          <li>帶有高風險基因型會有膽汁水分含量異<br>
              常狀況，造成膽汁容易產生結晶，導致<br>
              膽結石。
          </li>
        </ul>
      </th>

      <td>MUPCDH</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[167][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[167][3].'</div>';
                echo $genotype[167][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "6">
        <ul style="list-style-type:none; text-align: left">
          <li>影響膽道上皮細胞的免疫調節：</li>
          <li>帶有高風險基因型出現異常發炎反應，<br>
              促使膽囊的表皮細胞死亡，這些死亡脫<br>
              落的細胞會吸附膽固醇，於是造成膽結<br>
              石。
          </li>
        </ul>
      </th>

      <td>IL8RB</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[171][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[171][3].'</div>';
                echo $genotype[171][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>RNASEL</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[172][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[172][3].'</div>';
                echo $genotype[172][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL8-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[168][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[168][3].'</div>';
                echo $genotype[168][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL8-2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[169][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[169][3].'</div>';
                echo $genotype[169][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>IL8-3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[170][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[170][3].'</div>';
                echo $genotype[170][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>NOS2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[173][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[173][3].'</div>';
                echo $genotype[173][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>


<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>消化性潰瘍、胃食道逆流</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>消化性潰瘍屬於慢性、具復發性的疾病，主要包含十二指腸潰瘍及胃潰<br>
              瘍，上腹疼痛是最常見的臨床症狀。
          </li>
          <li>胃食道逆流是因胃食道和胃部上方連結處的賁門無法正常運作，導致胃<br>
              酸、消化酵素和胃裡面的食物逆流到食道，造成食道粘膜發炎。典型的<br>
              症狀有心口灼熱感(火燒心)、胃酸逆流感(溢酸)。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>10~15%</li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "6">
        <font color = "#5DADE2">消化性<br>潰瘍、<br>胃食道<br>逆流</font>
      </th>



      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節： </li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，對於消化<br>
              道黏膜的功能維持及修復能力產生影響<br>
              ，提高消化性潰瘍及胃食道逆流的可能<br>
              性。
          </li>
        </ul>
      </th>

      <td>IL-6</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[181][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[181][3].'</div>';
                echo $genotype[181][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL1B-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[182][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[182][3].'</div>';
                echo $genotype[182][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL1B-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[183][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[183][3].'</div>';
                echo $genotype[183][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL17A</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[185][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[185][3].'</div>';
                echo $genotype[185][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>IL8</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[184][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[184][3].'</div>';
                echo $genotype[184][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響黏膜分泌：</li>
          <li>參與醣蛋白(Glycoprotein)之合成調節。<br>
              帶有高風險基因型易發生黏膜分泌異常<br>
              ，增加消化性潰瘍、胃食道逆流的發<br>
              生。
          </li>
        </ul>
      </th>

      <td>PSCA </td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[180][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[180][3].'</div>';
                echo $genotype[180][2];
          ?>
        </font>
      </td>
    </tr>





  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>



<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>大腸息肉症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>息肉是一個生長在大腸之腸壁內的腫瘤組織，有些息肉(例如:增生性<br>
              息肉)不會變成癌症，但是有些息肉(例如:腺性息肉)會變成癌症。大<br>
              部分的大腸直腸息肉是沒有症狀的，偶爾會有腹痛、大便習慣改變、<br>
              便血或便秘等非特異性的症狀。
          </li>
          <li>腺性息肉發生癌化情形與息肉大小、形狀及家族史有關，息肉一旦有病<br>
              理變化或已有早期癌化即需切除。<br>
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>50歲成人<br>
              5~10%<br>
              70歲以上<br>
              50%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "7">
        <font color = "#5DADE2">大腸<br>息肉症</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用： </li>
          <li>帶有高風險基會使體內發炎反應調<br>
              控失衡，反覆發生大腸炎，導致息<br>
              肉產生。
          </li>
        </ul>
      </th>

      <td>CRP-1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[187][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[187][3].'</div>';
                echo $genotype[187][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>CRP-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[188][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[188][3].'</div>';
                echo $genotype[188][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>VEGF</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[186][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[186][3].'</div>';
                echo $genotype[186][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>毒物代謝相關：</li>
          <li>帶有高風險基因型易使大腸毒物代謝能<br>
              力下降，腸道毒物的累積導致大腸息肉<br>
              症。
          </li>
        </ul>
      </th>

      <td>CYP7A1 </td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[189][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[189][3].'</div>';
                echo $genotype[189][2];
          ?>
        </font>
      </td>
    </tr>




    <tr align = "center" >
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復的能力:</li>
          <li>帶有高風險基因型會出現鹼基修復路徑<br>
              (BER pathway)異常，提高細胞發生<br>
              病變的機率。
          </li>
        </ul>
      </th>

      <td>MYH-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[190][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[190][3].'</div>';
                echo $genotype[190][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>MYH-2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[191][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[191][3].'</div>';
                echo $genotype[191][2];
          ?>
        </font>
      </td>
    </tr>





    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>參與訊息調控的腫瘤抑制基因：</li>
          <li>帶有高風險基因型會使細胞Wnt訊息<br>
              傳遞路徑調控異常, 導致細胞癌化。
          </li>
        </ul>
      </th>

      <td>APC-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[192][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[192][3].'</div>';
                echo $genotype[192][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>



<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>胰臟炎</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>可分為急性胰臟炎與慢性胰臟炎。疾病發生原因包含阻塞性、酒精性、<br>
              藥物、抽煙、代謝性、外傷性、感染性、懷孕、家族遺傳、自體免疫及<br>
              其他不明性原因。慢性胰臟炎嚴重時可能併發胰臟癌。<br>
          </li>
          <li>一般的發生年齡約為40~60歲。男性酒精性胰臟炎較女性多。</li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>膽結石和喝酒約佔<br>
              70~80%<br>
              男性發生率是<br>
              女性的3倍
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <font color = "#5DADE2">胰臟炎</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>發炎反應：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成胰臟細胞較容易誘發發<br>
              炎反應導致胰臟炎。
          </li>
        </ul>
      </th>

      <td>CCL2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[451][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[451][3].'</div>';
                echo $genotype[451][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL-1β</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[452][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[452][3].'</div>';
                echo $genotype[452][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>IL-8</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[453][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[453][3].'</div>';
                echo $genotype[453][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL-10</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[454][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[454][3].'</div>';
                echo $genotype[454][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>白內障</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>白內障是因水晶體混濁，導致視力障礙的一種疾病。最常見的白內障是<br>
              因老化形成，年齡是最重要的單一危險因子。女性比男性更常罹患白內<br>
              障。<br>
          </li>
          <li>白內障早期的症狀可能有視力模糊、色調改變、怕光、眼前黑點、複視<br>
              、晶體性近視等，晚期症狀則為視力障礙日深，最後只能在眼前辨別手<br>
              指或僅剩下光覺視力。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>65歲以上<br>
              60％
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <font color = "#5DADE2">白內障</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復能力：</li>
          <li>帶有高風險基因型會影響DNA修復功<br>
              能，容易因氧化壓力造成水晶體細胞<br>
              的損傷，長期累積導致白內障的發生。
          </li>
        </ul>
      </th>

      <td>OGG1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[125][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[125][3].'</div>';
                echo $genotype[125][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>XRCC1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[126][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[126][3].'</div>';
                echo $genotype[126][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>WRN</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[128][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[128][3].'</div>';
                echo $genotype[128][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響水晶體結構：</li>
          <li>帶有高風險基因型易發生水晶體纖維細<br>
              胞彼此連結異常，影響水晶體原有的正<br>
              常結構。
          </li>
        </ul>
      </th>

      <td>EPHA2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[127][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[127][3].'</div>';
                echo $genotype[127][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>







<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>青光眼</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>青光眼是一群有很多不同病因所造成的疾病，共同特徵是視神經萎縮和<br>
              視野缺損，病理性的眼壓升高是最重要的文顯因素之一。
          </li>
          <li>慢性青光眼的病人往往沒有自覺症狀，等到病人發覺視力降低時，多半<br>
              已經是末期，已經萎縮的視神經是無法再生回復，任何治療都只是讓視<br>
              力不要再惡化，或惡化的慢一點，但視力不會有任何進步。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>1.3%<br>
              40歲以上<br>
              2~2.5%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "6">
        <font color = "#5DADE2">青光眼</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>房水的產生和排出調節：</li>
          <li>帶有高風險基因型易發現眼部異常聚積<br>
              彈性纖維，誘發剝脫性青光眼，且影響<br>
              房水(眼球的液體)的正常產出和排出，<br>
              一旦防房水排出受阻則造成眼壓升高，<br>
              壓迫視神經。
          </li>
        </ul>
      </th>

      <td>CDKN2B-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[139][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[139][3].'</div>';
                echo $genotype[139][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>CDKN2B-2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[140][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[140][3].'</div>';
                echo $genotype[140][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>控制正常眼睛發育：</li>
          <li>帶有高風險基因型易發現視神經缺陷，<br>
              提高青光眼視神經變性的易感度。
          </li>
        </ul>
      </th>

      <td>SIX6</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[138][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[138][3].'</div>';
                echo $genotype[138][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>參與細胞生長調控：</li>
          <li>調節眼部纖維血管的新生。帶有高風險<br>
              基因型會因細胞生長分化的調控失常，<br>
              導致周邊虹膜前粘黏並阻礙房水排出，<br>
              引起眼壓升高。
          </li>
        </ul>
      </th>

      <td>P53</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[136][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[136][3].'</div>';
                echo $genotype[136][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TNF-α</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[137][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[137][3].'</div>';
                echo $genotype[137][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HGF</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[141][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[141][3].'</div>';
                echo $genotype[141][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>







<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>黃斑部病變</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>黃斑部病變是一種隨年齡增長，逐漸出現網膜中央部位退化的疾病。視<br>
              覺上漸次出現視物扭曲變形、變大或變小、視力模糊，最終造成視力喪<br>
              失。
          </li>
          <li>年齡與基因遺傳是病情惡化的兩大危險因子，流行病學的調查發現，抽<br>
              煙的人罹病機會是不抽煙者2至5倍。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>65歲6%<br>
              80歲以上30%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "7">
        <font color = "#5DADE2">黃斑<br>部病變</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響血管增生：</li>
          <li>帶有高風險基因型易在黃斑部發現新生<br>
              血管滲水或滲血，積水及滲出物增加導<br>
              致病變。
          </li>
        </ul>
      </th>

      <td>VEGFA</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[135][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[135][3].'</div>';
                echo $genotype[135][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>HTRA1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[129][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[129][3].'</div>';
                echo $genotype[129][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>補體系統之免疫調節：</li>
          <li>帶有高風險基因型易引起過度免疫反應<br>
              而破壞黃斑部細胞。
          </li>
        </ul>
      </th>

      <td>CFH-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[130][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[130][3].'</div>';
                echo $genotype[130][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>CFH-2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[131][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[131][3].'</div>';
                echo $genotype[131][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>C3</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[132][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[132][3].'</div>';
                echo $genotype[132][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響抗氧化能力：</li>
          <li>帶有高風險基因型之抗氧化能力下降，<br>
              容易受到氧化壓力造成黃斑部細胞的死<br>
              亡。
          </li>
        </ul>
      </th>

      <td>GSTP</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[133][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[133][3].'</div>';
                echo $genotype[133][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ARMS2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[134][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[134][3].'</div>';
                echo $genotype[134][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>






<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>高度近視</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>高度近視為近視度數超過600度以上者。
          </li>
          <li>高度近視代表眼睛提早老化，因此容易併發視網膜剝離、黃斑部退化<br>
              或是白內障等眼科疾病。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>10%以上<br>
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "5">
        <font color = "#5DADE2">高度<br>近視</font>
      </th>



      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>影響眼軸長度：</li>
          <li>當高風險時，會影響視網膜生長因子，<br>
              造成眼軸增長風險增加，因此高度近視<br>
              風險增加。
          </li>
        </ul>
      </th>

      <td>TGF-β1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[411][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[411][3].'</div>';
                echo $genotype[411][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>WNT7B</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[412][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[412][3].'</div>';
                echo $genotype[412][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>GJD2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[413][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[413][3].'</div>';
                echo $genotype[413][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>UMODL1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[414][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[414][3].'</div>';
                echo $genotype[414][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>BMP2K</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[415][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[415][3].'</div>';
                echo $genotype[415][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>






<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>憂鬱症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>憂鬱症是一種涉及身體、情緒和思想的疾病。它會影響患者的飲食和睡<br>
              眠、對自己的感覺以及看待事情的方式，包含無用、無助和絕望。憂鬱<br>
              症並不同於暫時的情緒低落，如果不進行治療，症狀可以持續數週、數<br>
              月或是數年。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>7.3%<br>
              女性比男性
              高約兩倍
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "7">
        <font color = "#5DADE2">憂鬱症</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>參與神經傳導物質合成與傳遞：</li>
          <li>帶有高風險基因型會影響血清素、正腎<br>
              臟腺素、多巴胺等神經傳導物質的合成<br>
              及訊號傳導，使神經系統的正常運作受<br>
              到干擾。
          </li>
        </ul>
      </th>

      <td>TPH2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[220][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[220][3].'</div>';
                echo $genotype[220][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>TPH1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[221][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[221][3].'</div>';
                echo $genotype[221][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>影響神經系統發育 ：</li>
          <li>帶有高風險基因型會影響腦部神經系統<br>
              發育與神經傳導功能。
          </li>
        </ul>
      </th>

      <td>BCL9</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[218][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[218][3].'</div>';
                echo $genotype[218][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>BDNF</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[219][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[219][3].'</div>';
                echo $genotype[219][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>MYT1L</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[222][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[222][3].'</div>';
                echo $genotype[222][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>CTLA4</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[223][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[223][3].'</div>';
                echo $genotype[223][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>PROKR2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[224][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[224][3].'</div>';
                echo $genotype[224][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>躁鬱症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>躁鬱症，又稱躁狂憂鬱症，是一種可能引起患者情緒、精力及功能不穩定<br>
              的大腦失調症，患者情緒高低交替起伏，有時情緒高昂、有時低落。
          </li>
          <li>躁鬱症發病時出現的精神狀況會對個人的人際關係有所影響，工作或學習<br>
              狀態不佳，甚至自殺，後果非常嚴重。患者若接受有效治療，可以恢復健<br>
              康豐富的生活，如不接受治療，病情則會惡化。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>1.2%<
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "12">
        <font color = "#5DADE2">躁鬱症</font>
      </th>




      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>參與神經傳導物質合成與傳遞：</li>
          <li>帶有高風險基因型會影響血清素、正腎<br>
              臟腺素、多巴胺等神經傳導物質的合成<br>
              及訊號傳導，使神經系統的正常運作受<br>
              到干擾。
          </li>
        </ul>
      </th>

      <td>TPH1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[225][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[225][3].'</div>';
                echo $genotype[225][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>HTR1A</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[231][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[231][3].'</div>';
                echo $genotype[231][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>NTRK2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[234][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[234][3].'</div>';
                echo $genotype[234][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>PROKR2-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[235][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[235][3].'</div>';
                echo $genotype[235][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PROKR2-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[236][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[236][3].'</div>';
                echo $genotype[236][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "7">
        <ul style="list-style-type:none; text-align: left">
          <li>影響神經系統發育 ：</li>
          <li>帶有高風險基因型會影響腦部神經系統<br>
              發育與神經傳導而導致躁鬱症。
          </li>
        </ul>
      </th>

      <td>AKT1-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[227][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[227][3].'</div>';
                echo $genotype[227][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>AKT1-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[228][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[228][3].'</div>';
                echo $genotype[228][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>AKT1-3</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[229][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[229][3].'</div>';
                echo $genotype[229][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>COMT</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[230][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[230][3].'</div>';
                echo $genotype[230][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>BDNF</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[226][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[226][3].'</div>';
                echo $genotype[226][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>PDLIM5</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[232][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[232][3].'</div>';
                echo $genotype[232][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>CTLA4</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[233][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[233][3].'</div>';
                echo $genotype[233][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>思覺失調症</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>思覺失調屬輕型精神疾病的表面徵狀，一般包含感情障礙(如焦慮、<br>
              憂鬱等)，思想障礙(如強迫觀念等)。思覺失調症的病徵有幻覺、妄<br>
              想、心理障礙、注意力不足、反應緩慢和胡言亂語的症狀，影響其日<br>
              常生活。
          </li>
          <li>思覺失調症患者中斷治療的復發率極高，若9個月後中斷治療，復發<br>
              機率約7成;2年內沒有持續治療，復發機率高達9成。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>1%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "7">
        <font color = "#5DADE2">思覺<br>失調症</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>調節神經傳導物質的作用：</li>
          <li>帶有高風險基因型會影響神經傳導物質<br>
              的合成及訊號傳導，使神經系統的正常<br>
              運作受到干擾。
          </li>
        </ul>
      </th>

      <td>NRXN1-1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[241][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[241][3].'</div>';
                echo $genotype[241][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>NRXN1-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[242][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[242][3].'</div>';
                echo $genotype[242][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>G72/G30</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[239][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[239][3].'</div>';
                echo $genotype[239][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>VRK2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[243][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[243][3].'</div>';
                echo $genotype[243][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>影響神經系統發育 ：</li>
          <li>帶有高風險基因型會影響腦部神經系統<br>
              發育與神經傳導而導致躁鬱症。
          </li>
        </ul>
      </th>

      <td>BCL9</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[237][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[237][3].'</div>';
                echo $genotype[237][2];
          ?>
        </font>
      </td>
    </tr align = "center">

    <tr align = "center">
      <td>ANK3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[238][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[238][3].'</div>';
                echo $genotype[228][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>MYT1L</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[240][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[240][3].'</div>';
                echo $genotype[240][2];
          ?>
        </font>
      </td>
    </tr>




  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>慢性阻塞性肺病</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>慢性阻塞性肺病是一種呼吸氣流受阻，而且無法以藥物完全恢復之疾病，<br>
              通常是漸進式惡化。在全世界死亡原因中，慢性阻塞性肺病為第四位。
          </li>
          <li>患者常會出現急性惡化，主要症狀為呼吸變得更困難，常伴有喘鳴和胸悶<br>
              、痰量和咳嗽次數增加、痰的黏稠度及顏色改變和發燒。上呼吸道感染和<br>
              空氣污染是惡化常見原因。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>1.2%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "5">
        <font color = "#5DADE2">慢性<br>阻塞性<br>肺病</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響尼古丁的作用力：</li>
          <li>帶有高風險基因型會呈現尼古丁接受器<br>
              異常，使體內對於尼古丁之反應強度改<br>
              變，易產生成癮的現象。
          </li>
        </ul>
      </th>

      <td>CHRNA3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[146][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[146][3].'</div>';
                echo $genotype[146][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫調節相關：</li>
          <li>帶有高風險基因型對於空氣中有害物質<br>
              所引起的發炎反應作用異常，經常累積<br>
              而導致慢性阻塞性肺病。
          </li>
        </ul>
      </th>

      <td>ADIPOQ</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[142][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[142][3].'</div>';
                echo $genotype[142][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>影響毒物代謝功能：</li>
          <li>帶有高風險基因型會使體內毒物代謝功<br>
              能異常，特別是多環芳香化合物(致癌<br>
              物質)之解毒效果受影響。
          </li>
        </ul>
      </th>

      <td>GSTP1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[143][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[143][3].'</div>';
                echo $genotype[143][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <td>EPHX-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[144][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[144][3].'</div>';
                echo $genotype[144][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>EPHX-2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[145][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[145][3].'</div>';
                echo $genotype[145][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>








<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>腎結石</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>腎結石是尿液中的礦物質結晶沈積在腎臟裡，有時會移動到輸尿管。較小<br>
              的腎結石常會隨尿液排出體外，但如果直徑增加到可能堵住輸尿管，造成<br>
              尿液受阻，引起劇烈腰痛，有時疼痛會延伸到下腹部或腹股溝。若結石卡<br>
              在輸尿管進入膀胱處，則病人經常有解尿困難，頻尿等類似泌尿道感染的<br>
              情形出現。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>10%<br>
              男性是女性的4倍<br>
              約50%患者在五年內<br>
              會有復發的現象。
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "6">
        <font color = "#5DADE2">腎結石</font>
      </th>




      <th rowspan = "6">
        <ul style="list-style-type:none; text-align: left">
          <li>影響尿液中結晶形成：</li>
          <li>帶有高風險基因型會使抑制尿液中結晶<br>
              形成的調控蛋白活性下降，以致晶體過<br>
              多而產生沈積。
          </li>
        </ul>
      </th>

      <td>IN-<br>MT-FAM188B<br>-AQP1-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[175][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[175][3].'</div>';
                echo $genotype[175][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>IN-<br>MT-FAM188B<br>-AQP1-2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[177][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[177][3].'</div>';
                echo $genotype[177][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>MGP</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[174][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[174][3].'</div>';
                echo $genotype[174][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>DGKH-1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[176][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[176][3].'</div>';
                echo $genotype[176][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>DGKH-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[178][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[178][3].'</div>';
                echo $genotype[178][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>IL-18</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[179][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[179][3].'</div>';
                echo $genotype[179][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>







<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>腎衰竭</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>腎衰竭可分為急性腎損傷和慢性腎臟病。急性腎損傷只要經過適當的治<br>
              療就可能痊癒，而慢性腎臟病則為不可修復損傷。
          </li>
          <li>腎功能衰竭時，體內的廢液可能難以排除，會導致腫脹、酸血症、高鉀<br>
              血症、低血鈣、高血磷症，和貧血，骨骼的健康也可能會被影響。長期<br>
              的腎臟病也提高了心血管疾病的機率。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>慢性腎臟病約<br>
              11.9%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "3">
        <font color = "#5DADE2">腎衰竭</font>
      </th>



      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響血管細胞修復：</li>
          <li>帶有高風險基因時，對於血管內皮成層細<br>
              胞因血壓所造成的損傷休腹修復能力降低，<br>
              造成腎衰竭風險增加。
          </li>
        </ul>
      </th>

      <td>SOD2</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[455][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[455][3].'</div>';
                echo $genotype[455][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>PPAR-𝛾</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[456][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[456][3].'</div>';
                echo $genotype[456][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>誘發發炎反應：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td>MTHFR</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[457][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[457][3].'</div>';
                echo $genotype[457][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>








<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>氣喘</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>氣喘病是一種慢性的呼吸道發炎疾病，在臨床上大致可分為非過敏原引起<br>
              的及過敏原引起的兩種。
          </li>
          <li>氣喘依嚴重程度，會出現呼吸困難、喘鳴、胸悶和咳嗽等症狀，部分氣喘<br>
              病人還有多痰現象。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>11.9%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




 <div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "7">
        <font color = "#5DADE2">氣喘</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫調節相關：</li>
          <li>帶有高風險基因型之黏膜細胞容易產生<br>
              水腫和發炎反應，使支氣管內膜腫脹、<br>
              黏膜分泌過多而引起氣喘。
          </li>
        </ul>
      </th>

      <td>IL-13</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[244][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[244][3].'</div>';
                echo $genotype[244][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>IL-4 </td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[246][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[246][3].'</div>';
                echo $genotype[246][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SCGB1A1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[250][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[250][3].'</div>';
                echo $genotype[250][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>影響支氣管壁的收縮：</li>
          <li>帶有高風險基因型易發生支氣管器壁的肌<br>
              肉收縮異常，引起氣喘。
          </li>
        </ul>
      </th>

      <td>ADAM33-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[245][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[245][3].'</div>';
                echo $genotype[245][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ADAM33-2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[249][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[249][3].'</div>';
                echo $genotype[249][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>GPR154-1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[247][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[247][3].'</div>';
                echo $genotype[247][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>GPR154-1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[248][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[248][3].'</div>';
                echo $genotype[248][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>






<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>過敏性鼻炎</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>濕熱環境，加上溫差大、人口密集，且空氣污染嚴重易有過敏性鼻炎產<br>
              生。是一種患者的過敏體質或環境因素影響所形成的呼吸道慢性炎症反<br>
              應，嚴重者會變成鼻竇炎。
          </li>
          <li>過敏原檢測與保持室內通風的環境，盡量避免生冷飲食、多運動、維持<br>
              規律健康的生活，都有機會降低症狀與發生率。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約15~20%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "9">
        <font color = "#5DADE2">過敏性<br>鼻炎</font>
      </th>




      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成過<br>
              敏性鼻炎。
          </li>
        </ul>
      </th>

      <td>HLA</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[420][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[420][3].'</div>';
                echo $genotype[420][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>C11orf30</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[421][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[421][3].'</div>';
                echo $genotype[421][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SEMA6A</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[423][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[423][3].'</div>';
                echo $genotype[423][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>DHRS7</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[426][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[426][3].'</div>';
                echo $genotype[426][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>誘發發炎反應：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td>TSLP</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[428][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[428][3].'</div>';
                echo $genotype[428][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TMEM232</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[422][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[422][3].'</div>';
                echo $genotype[422][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CLEC16A</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[424][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[424][3].'</div>';
                echo $genotype[424][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[425][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[425][3].'</div>';
                echo $genotype[425][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CROCC</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[427][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[427][3].'</div>';
                echo $genotype[427][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>異位性皮膚炎</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>過敏性疾病之一，與基因以及環境有很大的關聯。因皮膚障壁有顯著異<br>
              常，造成外界過敏原/刺激物容易穿透皮膚，進而刺激皮膚發炎。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>超過10%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "6">
        <font color = "#5DADE2">異位性<br>皮膚炎</font>
      </th>



      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成異<br>
              位性皮膚炎症。
          </li>
        </ul>
      </th>

      <td>OVOL1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[432][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[432][3].'</div>';
                echo $genotype[432][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>ZNF365</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[435][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[435][3].'</div>';
                echo $genotype[435][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HLA-DRB1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[434][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[434][3].'</div>';
                echo $genotype[434][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>誘發發炎反應：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td>NLRP10</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[436][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[436][3].'</div>';
                echo $genotype[436][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CCDC80</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[437][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[437][3].'</div>';
                echo $genotype[437][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>C11orf30</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[433][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[433][3].'</div>';
                echo $genotype[433][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>乾癬</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>又稱為牛皮癬或銀削癬。</li>
          <li>疾病成因不明，但被認為與遺傳、外傷、壓力、感染與內分泌有關。</li>
          <li>乾癬除發生於皮膚外，有相當比例會造成關節疾患(乾癬性關節病變)，<br>
              另外50%的病人手指甲及35%病人的腳趾甲會被乾癬侵犯，產生指甲凹<<br>
              陷、黃斑、嚴重變形等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約0.2%~0.3%
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "10">
        <font color = "#5DADE2">乾癬</font>
      </th>




      <th rowspan = "6">
        <ul style="list-style-type:none; text-align: left">
          <li>誘發發炎反應：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td>IL23R</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[438][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[438][3].'</div>';
                echo $genotype[438][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>TRAF3IP2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[444][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[444][3].'</div>';
                echo $genotype[444][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TNFAIP3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[445][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[445][3].'</div>';
                echo $genotype[445][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>STAT2, IL23A</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[446][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[446][3].'</div>';
                echo $genotype[446][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL12B</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[442][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[442][3].'</div>';
                echo $genotype[442][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>TYK2</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[447][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[447][3].'</div>';
                echo $genotype[447][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>參與免疫調節作用：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              會使體內發炎激素或細胞介素的誘發表<br>
              現量異常，造成自身免疫障礙，形成乾<br>
              癬。
          </li>
        </ul>
      </th>

      <td>KCNH7, IFIH1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[440][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[440][3].'</div>';
                echo $genotype[440][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>LCE3B, LCE3D</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[439][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[439][3].'</div>';
                echo $genotype[439][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TNIP1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[441][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[441][3].'</div>';
                echo $genotype[441][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HLA-B, HLA-C</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[443][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[443][3].'</div>';
                echo $genotype[443][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>牙周病</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>發生在牙周周邊組織的疾病，主因為牙菌斑及牙結石堆積於牙齒或牙根表<br>
              面，導致局部發炎反應，進而造成包括齒槽骨、牙齦等牙齒周邊支持組織<br>
              破壞，使牙齒逐漸鬆動，最後造成牙齒喪失。
          </li>
          <li>罹患牙周病者得到心肌梗塞與中風的機率是一般人的2~3倍;因為牙齦附近<br>
              的致病菌引發發炎反應釋放的發炎物質，導致血管動脈粥樣硬化病理有所<br>
              改變，且此些菌可能入侵牙齦造成菌血症，影響血小板凝集導致血栓形成<br>
              ，更進而導致中風與心肌梗塞。

          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>高達90%以上
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "4">
        <font color = "#5DADE2">牙周病</font>
      </th>




      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>誘發發炎反應：</li>
          <li>主要調控發炎反應。帶有高風險基因型<br>
              對於誘發白血球細胞進行免疫反應的作<br>
              用異常。
          </li>
        </ul>
      </th>

      <td>IL4</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[458][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[458][3].'</div>';
                echo $genotype[458][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>IL8</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[459][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[459][3].'</div>';
                echo $genotype[459][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL8</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[460][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[460][3].'</div>';
                echo $genotype[460][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TGF-β1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[461][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[461][3].'</div>';
                echo $genotype[461][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>








<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>口腔癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>癌症與基因遺傳有關，然而，倘若缺少外界環境致癌因子，則這些致癌<br>
              基因很可能根本不會表現出來，亦即不會有口腔癌發生。
          </li>
          <li>在歐美地區，以抽煙及喝酒為主要致病因子;但在台灣及印度，以嚼檳<br>
              榔為主要致病因子的地區。
          </li>
          <li>要戰勝口腔癌，第一要務即是：「不要嚼檳榔，不要抽煙」。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之12~15<br>
              男女發生比率<br>
              約為8.2比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "8">
        <font color = "#5DADE2">口腔癌</font>
      </th>




      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTHFR </td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[402][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[402][3].'</div>';
                echo $genotype[402][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復能力：</li>
          <li>帶有高風險基因型會影響包括鹼基切除修復<br>
              (BER)、雙股斷裂修復(NHEJ pathway)等<br>
              調控作用，使DNA損傷造成的異常逐漸在體<br>
              內累積。
          </li>
        </ul>
      </th>

      <td>XRCC1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[396][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[396][3].'</div>';
                echo $genotype[396][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>Ku70</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[399][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[399][3].'</div>';
                echo $genotype[399][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：</li>
          <li>帶有高風險基因型會使體內發炎激素的<br>
              誘發表現量異常，提高口腔癌易感性。
          </li>
        </ul>
      </th>

      <td>CCR2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[397][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[397][3].'</div>';
                echo $genotype[397][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>毒物代謝功能：</li>
          <li>帶有高風險基因型會影響細胞排毒能力<br>
              及身體對化學物質的解毒力。
          </li>
        </ul>
      </th>

      <td>GSTP1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[400][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[400][3].'</div>';
                echo $genotype[400][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>致癌物解毒功能：</li>
          <li>帶有高風險基因型會使致癌物質活化(<br>
              如PHA多環芳烴類物質)，並影響解毒<br>
              功能。
          </li>
        </ul>
      </th>

      <td>CYP1A1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[403][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[403][3].'</div>';
                echo $genotype[403][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞生長、細胞凋亡的調控：</li>
          <li>該群基因參與細胞生長分化、細胞粘<br>
              附、細胞間訊號傳遞、細胞凋亡等調<br>
              控路徑，帶有高風險基因型易出現細<br>
              胞運作調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td>P53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[401][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[401][3].'</div>';
                echo $genotype[401][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>VEGF-C</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[398][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[398][3].'</div>';
                echo $genotype[398][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>鼻咽癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>鼻咽癌好發於中國東南沿海各省(尤其是廣東裔)聚集之地區如新加坡、<br>
              香港、台灣等地。
          </li>
          <li>主要原因約有三項，即遺傳因子、EB病毒感染、以及環境因素(食用過<br>
              多醃漬食物或鹹魚、工作環境之有機溶劑空氣污染及吸菸者等)。
          </li>患者一等親內的家屬得病機會約為一般人的6~20倍。
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之9.5~11.1<br>
              男性比女性易患其<br>
              比例約8.3比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "11">
        <font color = "#5DADE2">鼻咽癌</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復能力：</li>
          <li>帶有高風險基因型會影響鹼基切除修復<br>
              (BER)、DNA雙鏈斷裂修復等調控作用，<br>
              使DNA損傷造成的異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td>XRCC1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[316][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[316][3].'</div>';
                echo $genotype[316][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>NBS1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[315][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[315][3].'</div>';
                echo $genotype[315][2];
          ?>
        </font>
      </td>    </tr>


     <tr align = "center">
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：</li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高鼻咽<br>
              癌易感性。
          </li>
        </ul>
      </th>

      <td>IL-18</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[307][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[307][3].'</div>';
                echo $genotype[307][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL-23R</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[310][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[310][3].'</div>';
                echo $genotype[310][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TGF-β1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[311][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[311][3].'</div>';
                echo $genotype[311][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HLA-A</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[312][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[312][3].'</div>';
                echo $genotype[312][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CTLA4</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[317][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[317][3].'</div>';
                echo $genotype[317][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞增殖、細胞凋亡相關的訊號傳遞調控：</li>
          <li>該群基因參與細胞生長、分化、細胞間<br>
              訊號傳遞、細胞凋亡等調控路徑，帶有<br>
              高風險基因型易出現調控失衡，增加癌<br>
              變的發生。
          </li>
        </ul>
      </th>

      <td>MDS1-EVI1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[314][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[314][3].'</div>';
                echo $genotype[314][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>P53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[308][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[308][3].'</div>';
                echo $genotype[308][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TNFRSF19</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[313][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[313][3].'</div>';
                echo $genotype[313][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MMP2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[309][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[309][3].'</div>';
                echo $genotype[309][2];
          ?>
        </font>
      </td>
    </tr>




  </table>

   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>食道癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>危險因子包含:遺傳、吸菸與喝酒、營養不良、先前存在的食道疾病、<br>
              硝胺、社會經濟因素等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之2~3<br>
              男性比女性易患<br>
              比例12.9比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "11">
        <font color = "#5DADE2">食道癌</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTHFR </td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[283][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[283][3].'</div>';
                echo $genotype[283][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA修復能力的調控：</li>
          <li>帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)、<br>
              核苷酸交互連結等參與DNA修復的調控<br>
              作用，使DNA損傷造成的異常逐漸在體<br>
              內累積。
          </li>
        </ul>
      </th>

      <td>XRCC1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[289][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[289][3].'</div>';
                echo $genotype[289][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SMUG1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[284][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[284][3].'</div>';
                echo $genotype[284][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PON1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[286][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[286][3].'</div>';
                echo $genotype[286][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節： </li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高食道<br>
              癌易感性。
          </li>
        </ul>
      </th>

      <td>XBP1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[280][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[280][3].'</div>';
                echo $genotype[280][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>酒精代謝的功能：</li>
          <li>酒精在體內經由乙醇脫氫酶(ADH)代謝<br>
              成乙醛，而乙醛藉由乙醛脫氫酶(ALDH)<br>
              氧化成乙酸。ADH系列基因加上ALDH系<br>
              列基因雙項皆帶有高風險的人，代表其<br>
              酒精的代謝能力較差，身體易將酒精轉<br>
              換成乙醛，加上本身乙醛的氧化能力較<br>
              差，使體內易累積乙醛(一級致癌物)而<br>
              提高食道癌的罹病風險。
          </li>
        </ul>
      </th>

      <td>ADH4</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[281][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[281][3].'</div>';
                echo $genotype[281][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>ADH7</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[282][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[282][3].'</div>';
                echo $genotype[282][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞增殖、生長相關的訊號傳遞調控：</li>
          <li>該群基因參與細胞生長、分化、增殖、<br>
              細胞間訊號傳遞等調控路徑，帶有高風<br>
              險基因型易出現細胞週期、細胞生長的<br>
              調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td>PLCE1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[290][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[290][3].'</div>';
                echo $genotype[290][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>EGF</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[285][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[285][3].'</div>';
                echo $genotype[285][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>ALS2CR12</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[288][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[288][3].'</div>';
                echo $genotype[288][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞凋亡的調控：</li>
          <li>帶有高風險基因型會使細胞凋亡抑制因<br>
              子異常活化或影響程序化細胞死亡的調<br>
              控平衡，以致細胞過度生長及分化，增<br>
              加細胞癌變的發生。
          </li>
        </ul>
      </th>

      <td>TP53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[287][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[287][3].'</div>';
                echo $genotype[287][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>肺癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>危險因子包含:吸菸與油煙、家族病史、空氣污染、肺結核及其他慢性<br>
              疾病、石棉暴露因素等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之10~12<br>
              男性比女性易患<br>
              比例1.7比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "16">
        <font color = "#5DADE2">肺癌</font>
      </th>




      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTHFR </td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[302][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[302][3].'</div>';
                echo $genotype[302][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA修復能力的調控：</li>
          <li>帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)、<br>
              核苷酸交互連結等參與DNA修復的調控<br>
              作用，使DNA損傷造成的異常逐漸在體<br>
              內累積。
          </li>
        </ul>
      </th>

      <td>OGG1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[292][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[292][3].'</div>';
                echo $genotype[292][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>XRCC1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[303][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[303][3].'</div>';
                echo $genotype[303][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>APE1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[295][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[295][3].'</div>';
                echo $genotype[295][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節： </li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高食道<br>
              癌易感性。
          </li>
        </ul>
      </th>

      <td>CHRNA3</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[294][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[294][3].'</div>';
                echo $genotype[294][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>NFκBIA</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[299][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[299][3].'</div>';
                echo $genotype[299][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL23R</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[300][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[300][3].'</div>';
                echo $genotype[300][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>毒物代謝的功能：</li>
          <li>帶有高風險基因型會使致癌物質活化(如<br>
              PHA多環芳烴類物質)並影響解毒功能。
          </li>
        </ul>
      </th>

      <td>CYP1A1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[304][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[304][3].'</div>';
                echo $genotype[304][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞增殖、生長相關的訊號傳遞調控：</li>
          <li>該群基因參與細胞生長、分化、增殖、<br>
              細胞間訊號傳遞等調控路徑，帶有高風<br>
              險基因型易出現細胞週期、細胞生長的<br>
              調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td>P53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[305][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[305][3].'</div>';
                echo $genotype[305][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞凋亡的調控：</li>
          <li>帶有高風險基因型會使細胞凋亡抑制因<br>
              子異常活化或影響程序化細胞死亡的調<br>
              控平衡，以致細胞過度生長及分化，增<br>
              加細胞癌變的發生。
          </li>
        </ul>
      </th>

      <td>ERK5</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[296][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[296][3].'</div>';
                echo $genotype[296][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CLPTM1L</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[291][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[291][3].'</div>';
                echo $genotype[291][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TP63</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[298][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[298][3].'</div>';
                echo $genotype[298][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>CHEK2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[301][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[301][3].'</div>';
                echo $genotype[301][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞黏著的調控：</li>
          <li>帶有高風險基因型在細胞間粘附分子的<br>
              作用產生異常，有利於腫瘤細胞的移行<br>
              與侵犯正常組織。
          </li>
        </ul>
      </th>

      <td>hsa-mir-196a2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[293][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[293][3].'</div>';
                echo $genotype[293][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MMP2</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[306][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[306][3].'</div>';
                echo $genotype[306][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>染色體完整性的調控：</li>
          <li>染色體末端的端粒可保護染色體的完整<br>
              性，維持細胞功能正常運作。帶有高風<br>
              險基因型因端粒酶活性異常而影響染色<br>
              體端粒的完整性，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td>TERT</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[297][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[297][3].'</div>';
                echo $genotype[297][2];
          ?>
        </font>
      </td>
    </tr>

  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>胃癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>常見的危險因子包含:遺傳、年紀50歲以上、A型血型、燒烤食物、醬<br>
              菜鹹魚等鹽漬高鹽分食物、醃製食物、吸菸與酒精濫用、為不相關其他<br>
              疾病、以及幽門螺旋桿菌導致之嚴重胃炎等。
          </li>
          <li>好發年齡以50～70歲佔大多數，男性比女性來得多;但小於40歲的胃<br>
              癌，女性反多男性。地緣分佈方面，台灣的東北部和東部山地鄉鎮是<br>
              胃癌的高死亡率地區，至於客家鄉鎮，則是死亡率最低的地區。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之6~8<br>
              男性比女性易患<br>
              比例1.8比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "18">
        <font color = "#5DADE2">胃癌</font>
      </th>



      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA修復能力的調控：</li>
          <li>帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)、<br>
              鹼基配對修復(MMR)、核苷酸交互連結<br>
              等參與DNA修復的調控作用，使DNA損傷<br>
              造成的異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td>ECRR1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[333][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[333][3].'</div>';
                echo $genotype[333][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CLK2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[325][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[325][3].'</div>';
                echo $genotype[325][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MRE11A</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[326][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[326][3].'</div>';
                echo $genotype[326][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>RAD54L</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[327][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[327][3].'</div>';
                echo $genotype[327][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "7">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞生長的調控：</li>
          <li>帶有高風險基因型會使表皮生長因子受<br>
              器(EGFR)過度表現或影響表皮生長因子<br>
              受器之調控機轉(EGFR pathway)，還<br>
              甚至包括細胞成長/增生/代謝/轉移/血<br>
              管新生/凋亡各歷程的調控皆可能失衡。
          </li>
        </ul>
      </th>

      <td>MAP2K1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[322][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[322][3].'</div>';
                echo $genotype[322][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <td>FYN</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[320][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[320][3].'</div>';
                echo $genotype[320][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>MAP2K4</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[321][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[321][3].'</div>';
                echo $genotype[321][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PRKAA1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[332][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[332][3].'</div>';
                echo $genotype[332][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PRLR</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[323][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[323][3].'</div>';
                echo $genotype[323][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PLCG2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[324][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[324][3].'</div>';
                echo $genotype[324][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>PSCA</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[331][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[331][3].'</div>';
                echo $genotype[331][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞凋亡的調控：</li>
          <li>帶有高風險基因型會使細胞凋亡抑制因<br>
              子異常活化或影響程序化細胞死亡的調<br>
              控平衡，以致細胞過度生長及分化，增<br>
              加細胞癌變的發生。
          </li>
        </ul>
      </th>

      <td>PLCE1</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[328][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[328][3].'</div>';
                echo $genotype[328][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>P53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[329][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[329][3].'</div>';
                echo $genotype[329][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞黏著的調控：</li>
          <li>帶有高風險基因型會影響粘蛋白或其他<br>
              細胞間粘附分子的作用，進而使細胞間<br>
              膜表面受體訊號轉導與免疫活化功能減<br>
              弱。
          </li>
        </ul>
      </th>

      <td>MUC1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[330][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[330][3].'</div>';
                echo $genotype[330][2];
          ?>
        </font>
      </td>
    </tr>





    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：</li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高胃癌<br>
              易感性。
          </li>
        </ul>
      </th>

      <td>COX2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[318][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[318][3].'</div>';
                echo $genotype[318][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>TNF-α</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[334][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[334][3].'</div>';
                echo $genotype[334][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL10</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[335][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[335][3].'</div>';
                echo $genotype[335][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>IL8</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[319][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[319][3].'</div>';
                echo $genotype[319][2];
          ?>
        </font>
      </td>
    </tr>



  </table>

   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>








<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>肝癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>在歐美大腸癌好發在40~50歲以上，而台灣卻有年輕化的趨勢，朝向<br>
              20~30歲罹癌。
          </li>
          <li>常見的危險因子包含:飲食習慣(高熱量、高脂肪、多紅肉、低纖維)、<br>
              酗酒與抽煙、家族遺傳、個人大腸相關疾病、缺乏運動。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之18~20<br>
              男性比女性易患<br>
              比例1.35比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>



<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "13">
        <font color = "#5DADE2">肝癌</font>
      </th>




      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA修復能力的調控：</li>
          <li>帶有高風險基因型會影響包括鹼基切除<br>
              修復(BER)、核苷酸交互連結、雙股核<br>
              苷酸修復(NHEJ pathway)等參與DNA<br>
              修復的調控作用，使DNA損傷造成的異<br>
              常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td>OGG1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[336][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[336][3].'</div>';
                echo $genotype[336][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>XRCC5</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[337][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[337][3].'</div>';
                echo $genotype[337][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>XRCC3</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[345][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[345][3].'</div>';
                echo $genotype[345][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：<li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高肝癌<br>
              易感性。
          </li>
        </ul>
      </th>

      <td>TNF-α</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[346][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[346][3].'</div>';
                echo $genotype[346][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>IL10</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[338][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[338][3].'</div>';
                echo $genotype[338][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>HLA-DQ/DR</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[339][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[339][3].'</div>';
                echo $genotype[339][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>MICA</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[340][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[340][3].'</div>';
                echo $genotype[340][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>毒物代謝的功能：</li>
          <li>帶有高風險基因型會使體內毒物代謝功<br>
              能異常，特別是多環芳香化合物(致癌<br>
              物質)之解毒效果受影響。
          </li>
        </ul>
      </th>

      <td>EPHX1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[341][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[341][3].'</div>';
                echo $genotype[341][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞增殖、生長相關的訊號傳遞調控：</li>
          <li>該群基因參與細胞生長、分化、增殖、<br>
              細胞間訊號傳遞、細胞凋亡等調控路<br>
              徑，帶有高風險基因型易出現細胞運<br>
              作調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td>P21</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[343][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[343][3].'</div>';
                echo $genotype[343][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>P27</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[344][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[344][3].'</div>';
                echo $genotype[344][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>P53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[347][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[347][3].'</div>';
                echo $genotype[347][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>EGF</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[342][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[342][3].'</div>';
                echo $genotype[342][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTHFR</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[348][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[348][3].'</div>';
                echo $genotype[348][2];
          ?>
        </font>
      </td>
    </tr>


  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>





<div class="disease_title">
   <table class="table_disease_tile">
    <tr >
      <th>大腸癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>在歐美大腸癌好發在40~50歲以上，而台灣卻有年輕化的趨勢，朝向<br>
              20~30歲罹癌。
          </li>
          <li>常見的危險因子包含:飲食習慣(高熱量、高脂肪、多紅肉、低纖維)、<br>
              酗酒與抽煙、家族遺傳、個人大腸相關疾病、缺乏運動等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之18~20<br>
              男性比女性易患<br>
              比例1.35比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "13">
        <font color = "#5DADE2">大腸癌</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTHFR</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[268][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[268][3].'</div>';
                echo $genotype[268][2];
          ?>
        </font>
      </td>
    </tr>



     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：<li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高大腸<br>
              癌易感性。
          </li>
        </ul>
      </th>

      <td>RAD18</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[275][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[275][3].'</div>';
                echo $genotype[275][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <td>NFκBIA</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[276][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[276][3].'</div>';
                echo $genotype[276][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>LBP</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[277][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[277][3].'</div>';
                echo $genotype[277][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>毒物代謝的功能：</li>
          <li>該基因群參與多種致癌物質及藥物之代<br>
              謝，帶有高風險基因型會使體內化學物<br>
              質代謝功能異常，造成體內致癌物質之<br>
              累積。
          </li>
        </ul>
      </th>

      <td>ALDH2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[278][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[278][3].'</div>';
                echo $genotype[278][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>NQO1</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[269][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[269][3].'</div>';
                echo $genotype[269][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA修復能力的調控：</li>
          <li>帶有高風險基因型會影響包括核苷酸切<br>
              除修復(NER)、鹼基切除修復(BER)等<br>
              參與DNA修復的調控作用，使DNA損傷造<br>
              成的異常逐漸在體內累積。
          </li>
        </ul>
      </th>

      <td>REV3L</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[274][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[274][3].'</div>';
                echo $genotype[274][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center" >
      <td>XRCC1</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[270][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[270][3].'</div>';
                echo $genotype[270][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞生長的調控：</li>
          <li>帶有高風險基因型會使表皮生長因子過<br>
              度表現或影響細胞生長相關訊息的傳遞<br>
              ，涉及基因轉錄、細胞週期、細胞粘附<br>
              等調控，促使癌細胞的增殖及生長。
          </li>
        </ul>
      </th>

      <td>APC</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[267][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[267][3].'</div>';
                echo $genotype[267][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center" >
      <td>POU5F1B</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[272][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[272][3].'</div>';
                echo $genotype[272][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>EGF</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[271][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[271][3].'</div>';
                echo $genotype[271][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>SMAD7</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[273][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[273][3].'</div>';
                echo $genotype[273][2];
          ?>
        </font>
      </td>
    </tr>


    <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞凋亡的調控：</li>
          <li>該基因參與細胞週期調節、避免細胞癌<br>
              變發生，且具活化DNA修復蛋白的功能<br>
              。帶有高風險基因型會提高細胞癌變的<br>
              發生。
          </li>
        </ul>
      </th>

      <td>P53</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[279][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[279][3].'</div>';
                echo $genotype[279][2];
          ?>
        </font>
      </td>
    </tr>




  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>






<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>胰臟癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>胰臟癌早期症狀不明顯，且缺乏特異性的表現和敏感的診斷指標，早期<br>
              診斷極為困難，因此治療效果較不佳且預後較差。
          </li>
          <li>造成胰臟癌的確切原因至今仍不明確，常見的危險因子包含:酗酒與抽<br>
              煙、家族遺傳、糖尿病、肥胖症、慢性胰臟癌、環境接觸工業有機溶劑<br>
              與飲食習慣(蔬菜及水果攝取不足、紅肉或高熱量的食物攝取過量)等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>約萬分之1.5~2.1<br>
              男性比女性易患<br>
              比例1.36比1
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "13">
        <font color = "#5DADE2">胰臟癌</font>
      </th>




      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTRR</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[374][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[374][3].'</div>';
                echo $genotype[374][2];
          ?>
        </font>
      </td>
    </tr>

     <tr align = "center">
      <td>MTHFR</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[380][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[380][3].'</div>';
                echo $genotype[380][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復能力：<li>
          <li>帶有高風險基因型會影響鹼基切除修復<br>
              (BER)、DNA雙鏈斷裂修復、訊號傳遞<br>
              等調控作用，使DNA損傷造成的異常逐<br>
              漸在體內累積。
          </li>
        </ul>
      </th>

      <td>XRCC1</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[376][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[376][3].'</div>';
                echo $genotype[376][2];
          ?>
        </font>
      </td>
    </tr>



    <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：</li>
          <li>帶有高風險基因型會使體內發炎激素的<br>
              誘發表現量異常，提高胰臟癌易感性。
          </li>
        </ul>
      </th>

      <td>COX2</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[381][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[381][3].'</div>';
                echo $genotype[381][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>CTLA4</td>
      <td>GG</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[379][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[379][3].'</div>';
                echo $genotype[379][2];
          ?>
        </font>
      </td>
    </tr>


     <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞生長、細胞凋亡的調控：</li>
          <li>該群基因參與細胞生長分化、細胞粘<br>
              附、細胞間訊號傳遞、細胞凋亡等調<br>
              控路徑，帶有高風險基因型易出現細<br>
              胞運作調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td>PRLHR</td>
      <td>AA</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[377][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[377][3].'</div>';
                echo $genotype[377][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>FasL</td>
      <td>TT</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[375][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[375][3].'</div>';
                echo $genotype[375][2];
          ?>
        </font>
      </td>
    </tr>

    <tr align = "center">
      <td>DPP6</td>
      <td>CC</td>
      <td align = "center">
        <font face = "">
          <?php echo '<div style="Color:'.(($genotype[378][5] > 1) ? $color_highrisk : $color_lowrisk).'">'.$genotype[378][3].'</div>';
                echo $genotype[378][2];
          ?>
        </font>
      </td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>








<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>乳癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>大部分病例發生在45~55歲，30歲以前則較少見。
          </li>
          <li>常見的危險因子包含:家族遺傳、荷爾蒙與未曾生育或35歲以後才生第<br>
              一胎者、良性乳房瘤、肥胖者、輻射線的暴露、長期接受荷爾蒙(替代)<br>
              治療者，缺乏運動與酗酒等。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>女性約萬分之21
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "17">
        <font color = "#5DADE2">乳癌</font>
      </th>




      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTHFR </td>
      <td>GG</td>
      <td>AG</td>
    </tr>


     <tr align = "center">
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復能力：<li>
          <li>帶有高風險基因型會影響鹼基切除修復<br>
              (BER)、DNA雙鏈斷裂修復、訊號傳遞<br>
              等調控作用，使DNA損傷造成的異常逐<br>
              漸在體內累積。
          </li>
        </ul>
      </th>

      <td>APE1</td>
      <td>GG</td>
      <td>AG</td>
    </tr>

    <tr align = "center">
      <td>RAD51L1</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr align = "center">
      <td>BRCA1</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr align = "center">
      <td>BRCA2</td>
      <td>CC</td>
      <td>CC</td>
    </tr>




    <tr align = "center">
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>免疫反應的調節：</li>
          <li>帶有高風險基因型會使體內發炎激素或<br>
              細胞介素的誘發表現量異常，提高乳癌<br>
              易感性。
          </li>
        </ul>
      </th>

      <td>IL23</td>
      <td>GG</td>
      <td>AG</td>
    </tr>

    <tr align = "center">
      <td>MAP3K1</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr align = "center">
      <td>IL-17A</td>
      <td>CC</td>
      <td>CC</td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>毒物代謝的功能：</li>
          <li>帶有高風險基因型會影響細胞排毒能力<br>
              及身體對化學物質的解毒力。
          </li>
        </ul>
      </th>

      <td>GSTP1</td>
      <td>GG</td>
      <td>AG</td>
    </tr>

    <tr align = "center">
      <td>ABCB1</td>
      <td>CC</td>
      <td>CC</td>
    </tr>


   <tr align = "center">
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>影響脂肪代謝能力：</li>
          <li>帶有高風險基因型易發生脂質代謝異<br>
              常，使膽固醇及三酸甘油酯過量累積。
          </li>
        </ul>
      </th>

      <td>APOB</td>
      <td>GG</td>
      <td>AG</td>
    </tr>


     <tr align = "center" >
      <th rowspan = "4">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞生長的調控：</li>
          <li>帶有高風險基因型會使血管內皮生長因<br>
              子表現異常或影響細胞生長相關訊息的<br>
              傳遞，進而使細胞週期、細胞分化、細<br>
              胞粘附等調控失衡，促使癌細胞的增殖<br>
              及生長。
          </li>
        </ul>
      </th>

      <td>HUNK</td>
      <td>GG</td>
      <td>AG</td>
    </tr>

    <tr align = "center">
      <td>FGFR2-1</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr align = "center">
      <td>FGFR2-2</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr align = "center">
      <td>LOX</td>
      <td>CC</td>
      <td>CC</td>
    </tr>


     <tr align = "center">
      <th rowspan = "2">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞凋亡的調控：</li>
          <li>帶有高風險基因型會使細胞凋亡抑制因<br>
              子異常活化或影響程序化細胞死亡的調<br>
              控平衡，以致細胞過度生長及分化，增<br>
              加細胞癌變的發生。
          </li>
        </ul>
      </th>

      <td>CCND1</td>
      <td>GG</td>
      <td>AG</td>
    </tr>

    <tr align = "center">
      <td>VEGF</td>
      <td>CC</td>
      <td>CC</td>
    </tr>





  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>




<div class="disease_title">
   <table class="table_disease_tile">
    <tr>
      <th>卵巢癌</th>
      <th>盛行率</th>
    </tr>


    <tr>
      <td>
        <ul style="list-style-type:square;">
          <li>卵巢癌
          </li>
          <li>卵巢癌好發於四十歲至七十歲婦女，其可能發生於任何年齡群，發生率隨<br>
              年齡逐年增高。
          </li>
          <li>常見的危險因子包含:家族遺傳、未曾懷孕生育的婦女、較晚停經的婦女、<br>
              曾得過乳癌的病人、曾受過輻射線的暴露、接觸過工業用石綿污染等。<br>
              有趣的是，使用口服避孕藥及輸卵管結紮者發生率減低。
          </li>
        </ul>
      </td>


      <td>
        <ul style="list-style-type:none;">
          <li>女性約萬分之6
          </li>
        </ul>
      </td>

    </tr>

  </table>


</div>




<div class="disease_detail">


  <table class="table_disease_detail" FRAME="VOID" BORDER="2" RULES="ALL">

    <tr align="center">
      <th scope=col>項目</th>
      <th scope=col>基因功能類別</th>
      <th scope=col>基因名稱</th>
      <th scope=col>一般風險基因型</th>
      <th scope=col>您的基因型</th>
    </tr>


    <tr align="center">
      <th rowspan = "10">
        <font color = "#5DADE2">卵巢癌</font>
      </th>



      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>DNA甲基化程度：</li>
          <li>該基因參與細胞單碳循環代謝途徑，影<br>
              響DNA甲基化的程度，進而影響細胞染<br>
              色體穩定度和基因的表現。帶有高風險<br>
              基因型易使細胞癌化及腫瘤形成。
          </li>
        </ul>
      </th>

      <td>MTHFR </td>
      <td>GG</td>
      <td>AG</td>
    </tr>


     <tr>
      <th rowspan = "3">
        <ul style="list-style-type:none; text-align: left">
          <li>影響DNA修復能力：<li>
          <li>帶有高風險基因型會影響鹼基切除修復<br>
              (BER)、DNA雙鏈斷裂修復、訊號傳遞<br>
              等調控作用，使DNA損傷造成的異常逐<br>
              漸在體內累積。
          </li>
        </ul>
      </th>

      <td>OGG1</td>
      <td>GG</td>
      <td>AG</td>
    </tr>

    <tr>
      <td>IL-18</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr>
      <td>IL23</td>
      <td>CC</td>
      <td>CC</td>
    </tr>





    <tr>
      <th rowspan = "1">
        <ul style="list-style-type:none; text-align: left">
          <li>毒物代謝的功能：</li>
          <li>帶有高風險基因型會使致癌物質活化(如<br>
              PHA多環芳烴類物質)並影響解毒功能。
          </li>
        </ul>
      </th>

      <td>CYP1A1</td>
      <td>GG</td>
      <td>AG</td>
    </tr>



     <tr>
      <th rowspan = "5">
        <ul style="list-style-type:none; text-align: left">
          <li>細胞生長、細胞凋亡的調控：</li>
          <li>該群基因參與細胞生長分化、細胞粘<br>
              附、細胞間訊號傳遞、細胞凋亡等調<br>
              控路徑，帶有高風險基因型易出現細<br>
              胞運作調控失衡，增加癌變的發生。
          </li>
        </ul>
      </th>

      <td>LOX</td>
      <td>GG</td>
      <td>AG</td>
    </tr>

    <tr>
      <td>FSHR</td>
      <td>CC</td>
      <td>CC</td>
    </tr>


    <tr>
      <td>MMP2</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr>
      <td>FASL</td>
      <td>CC</td>
      <td>CC</td>
    </tr>

    <tr>
      <td>MMP12</td>
      <td>CC</td>
      <td>CC</td>
    </tr>



  </table>


   <ul style="list-style-type:none; text-align: left">
     <li>備註：</li>
     <li>(1)我們的基因型，一半來自父親，一半來自母親，因此每個人會有兩個對偶基因，如CC、CT。<br>
         (2)<b><font color = "red">紅字標示判定為『高風險』基因型</font></b>。就您個人而言，帶有高風險基因型可能是導致該疾病發生的<br>
         先天性影響因子，請多加留意。<br>
         (3)基因檢測是基於遺傳因子來評估疾病發生風險，不是臨床診斷。
     </li>
   </ul>

 </div>


</body>



</html>
