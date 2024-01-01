<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="Menu.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body>
    <div class="navigation">
        <ul>
            <li><a href="#" class="logo">
                <img src="logokoko.jpg">
                <span >We Can Fix It</span>
              </a></li>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="Menu.php" class="active"  >
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="Gmail.php" >
                    <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                    <span class="nav-item">Messages</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="employee.php" >
                    <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
                    <span class="nav-item">Schedule</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="T.php" >
                    <span class="icon"><ion-icon name="ticket-outline"></ion-icon></span>
                    <span class="nav-item">Tickets</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="settings.php" >
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="nav-item">Settings</span>
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


<!--cards-->
   
<div class=" main-top">      
     <h1><ion-icon name="heart"></ion-icon>Dedication</h1>
        </div>
        <div class=" users">
        <div class="car">
            <img src="profile1.jpg">
            <h4>Amine Alami</h4>
            <p>Engineer</p>
            <h5>Note</h5>
            <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>
            <div class="per">
            </div>
            <button>Profile</button>

          </div>
          <div class="swiper-slide car">
            <img src=profile2.png>
            <h4>Amina Khalid</h4>
            <p>Progammer</p>
            <h5>Note</h5>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star-half"></ion-icon>
            <ion-icon name="star-outline"></ion-icon>
            <div class="per">
            </div>
            <button>Profile</button>
          </div>
          <div class=" car">
            <img src="profile3.jpg">
            <h4>Hatim Nekach</h4>
            <p>Programmer</p>
            <h5>Note</h5>  
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>        
            <ion-icon name="star-half"></ion-icon>
            <ion-icon name="star-outline"></ion-icon>  
           <div class="per">
            </div>
            <button>Profile</button>
          </div>
          <div class="car">
            <img src="profile4.jpg">
            <h4>Rachid Rifi</h4>
            <p>Engineer</p> 
            <h5>Note</h5>   
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star-half"></ion-icon>       
            <div class="per">
          
            </div>
            <button>Profile</button>
          </div>   
          <!--cardss-->

    <!--<div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">2</div>
                <div class="cardName">Employee</div>
            </div>
            <div class="iconBx">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">2</div>
                <div class="cardName">Messages</div>
            </div>
            <div class="iconBx">
                <ion-icon name="mail-unread-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">2</div>
                <div class="cardName">Tickets</div>
            </div>
            <div class="iconBx">
                <ion-icon name="clipboard-outline"></ion-icon>
            </div>
        </div>       
      </div>-->



      </div>
  </div>
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

 