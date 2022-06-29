<form class ="form" action="modules\classes\tables\add.php" method="post">
<label for="name"></label>
<input type="text"name ="name" placeholder="Введите имя">
<label for="secondName"></label>
<input type="text"name ="secondName" placeholder="Введите фамилию" >
<label for="phone"></label>
<input type="number"name ="phone" placeholder="Введите телефон" >
<label for="phone"></label>
<input type="text" name="age" placeholder="Возраст" >
<div>
<button type="submit" class="add">Добавить</button>
</form>
<a class = "create" href="modules\classes\tables\createtable.php">CREATE TABLE</a>
<a class = "delete" href="modules\classes\tables\deletetable.php">DELETE TABLE</a>
</div>

<?php  
?>
<style>
.form {
    display: flex;
    justify-content: space-around;
    background-color: burlywood;
    align-items: center;
    font-size: 24px;
    height: 100px;
}
input{
    height: 30px;
    background-color: darkturquoise;
}
.create{
    color:green;
    text-decoration: none;
}
.delete{
    color: red;
    text-decoration: none;
}
.add{
    background-color: orange;
    font-size: 24px;
    color: white;
    border-radius: 5px;
    box-shadow: 2px 2px 2px 2px 2px orangered;
    transition: 0.4s;
}
.create:hover,.delete:hover,.add:hover,.update:hover{
    border: none;
    font-size: 26px;
    box-shadow: 0px 0px 0px;
    color: blue;
    transition: 0.4s;
  
}
</style>