

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="page1.css">
</head>
<body>
    <div class="navigation">
        <ul>
            <li><a href="#" class="logo">
                <img src="logoSanté.png">
              </a></li>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="page1.php" class="active"  >
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li class="list ">
                <b></b>
                <b></b>
                <a href="patient.php" >
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="nav-item">Patients</span>
                </a>
            </li>
            <li class="list ">
                <b></b>
                <b></b>
                <a href="medecin.php" >
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="nav-item">Medecins</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="Medication.php" >
                    <span class="icon"><ion-icon name="ban-outline"></ion-icon></span>
                    <span class="nav-item">Medicaments</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="ordonnance.php" >
                    <span class="icon"><ion-icon name="id-card-outline"></ion-icon></span>
                    <span class="nav-item">Ordonnances</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a  href="logout.php">
                    <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="nav-item">Sign Out</span>
                </a>
            </li>
             <div class="indicator"></div>
        </ul>
    </div>
    <div class="main">
   <div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline" class="open"></ion-icon>
        <ion-icon name="close-circle-outline" class="close"></ion-icon>
    </div>


<!---->
<div class=" main-top">      
<h2>We are providing</h2>
<br>
<h1>Best Medical Services</h1>
</div>

<br>
<style>
.main{
    position: absolute;
    display: flex;
    width: calc(100% - 300px);
    left: 300px;
    min-height: 100vh;
    background: var(--white);
    transition: 0.5s;
}
.topbar{
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
}
.toggle{
    position: fixed;
    top: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: #acc6aa;
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
}

.toggle.active{
   background: #a5b1c2 ; 
}
.toggle ion-icon{
    position: absolute;
    color: #fff;
    font-size: 34px;
    display: none;
}
.toggle ion-icon.open,
.toggle.active ion-icon.close{
    display: block;
}
.toggle ion-icon.close,
.toggle.active ion-icon.open{
    display: none;
}
    .image{
    position: center;
    width: 320px;
    background:white;
    text-align: center;
    border-radius: 40px;
    padding: 40px;
    margin: 20px;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    margin: 1400px  20px 650px;
    margin-right: 500px;
    margin-left: 2px;
    margin-top: 1200px;
}
</style>
<img class="image" src="logoSanté.png" alt="">
</div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
   
        let menuToggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation')
        menuToggle.onclick = function(){
            menuToggle.classList.toggle('active');
            navigation.classList.toggle('active');
        }
        //add active class in selected list item   window.alert("Hello Koautar!");
         //alert("Hello Kaoutar!");
         let list = document.querySelectorAll('.list');
        for(let i=0; i<list.length ;i++){
            list[i].onclick = function(){
                let j=0;
                while(j < list.length){
                   list[j++].className= 'list';
                }
                list[i].className = 'list active';
            }
        }
     </script>
</body>
</html>

 