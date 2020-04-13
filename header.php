<header>
    <h1 id="title-bar">Danilo Prieto</h1>
    <ul>
        <li>
            <a href='./about.php'>Sobre mi</a>
        </li>
        <li>
            <a [routerLink]="['/projects']" [routerLinkActive]="['actived']">Proyectos</a>
        </li>
        <li id="logo"><a href="#">dP</a></li>
        <li>
            <a href=''>Contacto</a>
        </li>
        <li id="nav-create-project" *ngIf="loginOk == true">
            <a href='./add.php'>Agregar</a>
        </li>
        <li *ngIf="loginOn == false">
            <a (click)="change()">Login</a>
        </li>
        <li *ngIf="loginOk == true">
            <a (click)="resetLocalStorage()">LogOut</a>
        </li>
        <div id="login" *ngIf="loginOn == true && loginOk == false">
            <form #loginForm=ngForm (ngSubmit)="onSubmit(loginForm)">
                <input type="text" name="user" #user="ngModel" [(ngModel)]="login.username" placeholder="User" required>
                <input type="text" name="pass" #pass="ngModel" [(ngModel)]="login.password" placeholder="Pass" required>
                <input type="submit" value="ok">
            </form>
        </div>
    </ul>
</header>


<section id="content">
    <div class="social">
        <a href='//api.whatsapp.com/send?phone=543755662908'>
            <img id="whatsapp-logo" src="./img/whatsapp-icon.png" alt="Iglesia Gilgal">
        </a>
        <a href='https://www.linkedin.com/in/danilo-prieto-480292187/'>
            <img id="linkedin-logo" src="./img/linkedin-icon.png" alt="Iglesia Gilgal">
        </a>
        <a [routerLink]="['/contact']">
            <img id="gmail-logo" src="./img/gmail-icon.png" alt="Iglesia Gilgal">
        </a>
    </div>
</section>
