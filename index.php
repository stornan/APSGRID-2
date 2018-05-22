<?php require'header.php' ?>
		<article class="mainContent">
            <table id="mainTable">
                <tr>
                    <th>Probabilidade de chuva</th>
                    <th>Intesidade</th> 
                    <th>Umidade</th>
                </tr>
                <tr>
                    <td>----</td>
                    <td>----</td>
                    <td>----</td>
                </tr>
                <tr>
                    <th>Probabilidade de chuva</th>
                </tr>
                <tr>
                    <td>----</td>
                </tr>
            </table>
        <input type="button" class="btn1" onclick="alert('Processando')" value="Processar.">
		</article>
        <aside class="mainTime">
            <?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>
            <?php

                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                echo strftime('%A, %d de %B de %Y', strtotime('today'));
                /*%A: dia da semana por extenso.*/
                /*%d: dia do mês representado com dois digitos.*/
                /*%B: mês por extenso.*/
                /*%Y: ano representado com quatro digitos.*/
            ?>
        </aside>
<?php require'footer.php' ?>