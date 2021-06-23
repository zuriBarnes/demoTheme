<?php
$title = "Module 3";

?>

<div class="box">
  <img src="//unsplash.it/501/501" alt="">
  <div class="body">
    <h2 class="body__title"><?php echo $title ?></h2>
    <p class="body__text">Bacon ipsum dolor amet kevin tail strip steak capicola picanha chuck.Bacon ipsum dolor amet kevin tail strip steak capicola picanha chuck. Capicola short loin picanha jowl prosciutto cupim chuck alcatra pork loin trtip. Salami.</p>
    <button class="btn">Shop Now</button>
  </div>
</div>


<style>
.box {
  width: 100%;
}

.body {
  position: relative;
  padding: 3rem;
  background: rgba(0,0,0, 0.5);
  color: white;
  line-height: 1.6;
}

.body__title {
  font-size: 40px;
  line-height: 1;
}.body__title {
  font-size: 40px;
  line-height: 1;
}

.body__text {
  font-family: 'Tienne', serif;
  font-size: 14px;
  line-height: 1.6;
}


.box {
  position: relative;
}
img {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.btn {
  padding: 4px 26px;
}
</style>