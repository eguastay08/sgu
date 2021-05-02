<div style="font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;border: solid 1px #e5e5e5;border-radius: 8px;margin-top: 2rem;margin-bottom:25px;box-shadow: 0 10px 25px rgba(92,99,105,.2);width: 500px; margin-left: auto !important;margin-right: auto !important;flex: 0 0 33.333333%;width:90%;max-width:630px;position: relative;">
    <div style=" margin: 0; display: flex;flex-wrap: wrap; padding: .5rem !important; background-color: #0b283f;border-top-right-radius: 5px; border-top-left-radius: 5px; ">
        <img style="width: 200px;height: 35px;margin: auto !important;border-style: none;" title="logoueb" alt="logoueb" src="https://sac.ueb.edu.ec/logo_white.svg">
    </div>
    <br>
    <div id="content" style="padding: 10px;">
        <div>
            <div style="margin-top:5px!important;padding:6px;text-align:center!important">
                <span style="font-size:18px"><b>Bienvenido</b></span><br><br>
            </div>
            <span>Estimado/a <b>{{$data['name']}}</b></span><br><br>
            <!-- <span style="font-size:13px; text-aling:left;">Fecha: jueves, 12 de noviembre de 2020 15:58</span><br><br>-->
            <span>La <b>Universidad Estatal de Bolívar</b> le da la <span class="il">bienvenida</span> a formar parte de nuestra noble institución, la <b>Dirección de Tecnología de la Información y la Comunicación</b> tiene el honor de dar a conocer nuestros servicios en línea que están a disposición de todos los estudiantes:</span>
        </div><br>
        <div>
            <div style="margin-left: 45px;">
                <b>Portal de Servicios Viruales:</b><a href="https://sac.ueb.edu.ec" target="_blank"> https://sac.ueb.edu.ec</a><br><br>
                <b>Sus <span class="il">credenciales</span> de acceso son:</b>
                <br>
                <p><b>Usuario: </b><a href="mailto:{{$data['new_email']}}" target="_blank">{{$data['new_email']}}</a></p>
                <p><b>Contraseña Temporal: </b>{{$data['password']}}</p>
            </div>
            <br>

            <p>En el caso de necesitar asistencia técnica comunicate en nuestro grupo de <b><a href="https://chat.whatsapp.com/IMjN7na9GxCKYWnkU6QztQ" target="_blank">Whatsapp</a></b> o <b><a href="https://t.me/joinchat/aHxu0KNlmhdmNGFh" target="_blank">Telegram</a></b> con soporte para <b>200.000</b> miembros</p>
        </div><br>
        <span   style="text-aling:left;"> Atentamente,</span><br><br>
        <span  style=" text-aling:left;"><b> Dirección de Tecnología de la Información y la Comunicación</b></span>
        <br><br>
    </div>
    <div style=" color: white; margin: 0; display: flex;flex-wrap: wrap; padding: .5rem !important; background-color: #0b283f;border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; ">
        <center style="width: 100%;font-size: 10px;"><span>Copyright © 2021<br> Derechos Reservados Universidad Estatal de Bolívar<br> Dirección de TICs </span></center>
    </div>
</div>
