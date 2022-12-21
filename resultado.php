



<!DOCTYPE HTML>
<html>
    <head>
        <title>Resultado</title>
        <style>
             body{
                 text-align: center;
               font-size: 90;
        background-image: url("background2.jpg");
    }
            
        </style>
    </head>
<body>
        <?php

            $q1=$_POST["q1"];
            $q2=$_POST["q2"];
            $q3=$_POST["q3"];
            $q4=$_POST["q4"];
            $q5=$_POST["q5"];
            $q6=$_POST["q6"];
            $q7=$_POST["q7"];
            $q8=$_POST["q8"];
            $q9=$_POST["q9"];
            $q10=$_POST["q10"];
            $q11=$_POST["q11"];
            $q12=$_POST["q12"];
            $q13=$_POST["q13"];
            $q14=$_POST["q14"];
            $q15=$_POST["q15"];
            $q16=$_POST["q16"];
            $q17=$_POST["q17"];
            $q18=$_POST["q18"];
            $q19=$_POST["q19"];
            $q20=$_POST["q20"];
            $q21=$_POST["q21"];
            $q22=$_POST["q22"];
            $q23=$_POST["q23"];
            $q24=$_POST["q24"];
            $q25=$_POST["q25"];
            $q26=$_POST["q26"];

            $Introvertido=0;
            $Extrovertido=0;
            $Intuitivo=0;
            $Sensorial=0;
            $Pensante=0;
            $Sentimental=0;
            $Julgador=0;
            $Perceptivo=0;

        if($q1=='a1'){   
            $Extrovertido=$Extrovertido+2;
        }
        else if ($q1=='b1'){   
            $Extrovertido++;
        }
        else if ($q1=='c1'){   
            $Introvertido++;
        }
        else if ($q1=='d1'){   
            $Introvertido=$Introvertido+2;
        }




        if($q2=='a2'){   
            $Intuitivo=$Intuitivo+2;
        }
        else if ($q2=='b2'){   
            $Intuitivo++;
        }
        else if ($q2=='c2'){   
            $Sensorial++;
        }
        else if ($q2=='d2'){   
            $Sensorial=$Sensorial+2;
        }



        if($q3=='a3'){   
            $Pensante=$Pensante+2;
        }
        else if ($q3=='b3'){   
            $Pensante++;
        }
        else if ($q3=='c3'){   
            $Sentimental++;
        }
        else if ($q3=='d3'){   
            $Sentimental=$Sentimental+2;
        }





        if($q4=='a4'){   
            $Julgador=$Julgador+2;
        }
        else if ($q4=='b4'){   
            $Julgador++;
        }
        else if ($q4=='c4'){   
            $Perceptivo++;
        }
        else if ($q4=='d4'){   
            $Perceptivo=$Perceptivo+2;
        }





        if($q5=='a5'){   
            $Introvertido=$Introvertido+2;
        }
        else if ($q5=='b5'){   
            $Introvertido++;
        }
        else if ($q5=='c5'){   
            $Extrovertido++;
        }
        else if ($q5=='d5'){   
            $Extrovertido=$Extrovertido+2;
        }





        if($q6=='a6'){   
            $Sensorial=$Sensorial+2;
        }
        else if ($q6=='b6'){   
            $Sensorial++;
        }
        else if ($q6=='c6'){   
            $Intuitivo++;
        }
        else if ($q6=='d6'){   
            $Intuitivo=$Intuitivo+2;
        }





        if($q7=='a7'){   
            $Pensante=$Pensante+2;
        }
        else if ($q7=='b7'){   
            $Pensante++;
        }
        else if ($q7=='c7'){   
            $Sentimental++;
        }
        else if ($q7=='d7'){   
            $Sentimental=$Sentimental+2;
        }




        if($q8=='a8'){   
            $Julgador=$Julgador+2;
        }
        else if ($q8=='b8'){   
            $Julgador++;
        }
        else if ($q8=='c8'){   
            $Perceptivo++;
        }
        else if ($q8=='d8'){   
            $Perceptivo=$Perceptivo+2;
        }



        if($q9=='a9'){   
            $Extrovertido=$Extrovertido+2;
        }
        else if ($q9=='b9'){   
            $Extrovertido++;
        }
        else if ($q9=='c9'){   
            $Introvertido++;
        }
        else if ($q9=='d9'){   
            $Introvertido=$Introvertido+2;
        }



        if($q10=='a10'){   
            $Sensorial=$Sensorial+2;
        }
        else if ($q10=='b10'){   
            $Sensorial++;
        }
        else if ($q10=='c10'){   
            $Intuitivo++;
        }
        else if ($q10=='d10'){   
            $Intuitivo=$Intuitivo+2;
        }



        if($q11=='a11'){   
            $Pensante=$Pensante+2;
        }
        else if ($q11=='b11'){   
            $Pensante++;
        }
        else if ($q11=='c11'){   
            $Sentimental++;
        }
        else if ($q11=='d11'){   
            $Sentimental=$Sentimental+2;
        }




        if($q12=='a12'){   
            $Julgador=$Julgador+2;
        }
        else if ($q12=='b12'){   
            $Julgador++;
        }
        else if ($q12=='c12'){   
            $Perceptivo++;
        }
        else if ($q12=='d12'){   
            $Perceptivo=$Perceptivo+2;
        }





        if($q13=='a13'){   
            $Introvertido=$Introvertido+2;
        }
        else if ($q13=='b13'){   
            $Introvertido++;
        }
        else if ($q13=='c13'){   
            $Extrovertido++;
        }
        else if ($q13=='d13'){   
            $Extrovertido=$Extrovertido+2;
        }



        if($q14=='a14'){   
            $Intuitivo=$Intuitivo+2;
        }
        else if ($q14=='b14'){   
            $Intuitivo++;
        }
        else if ($q14=='c14'){   
            $Sensorial++;
        }
        else if ($q14=='d14'){   
            $Sensorial=$Sensorial+2;
        }




        if($q15=='a15'){   
            $Sentimental=$Sentimental+2;
        }
        else if ($q15=='b15'){   
            $Sentimental++;
        }
        else if ($q15=='c15'){   
            $Pensante++;
        }
        else if ($q15=='d15'){   
            $Pensante=$Pensante+2;
        }



        if($q16=='a16'){   
            $Extrovertido=$Extrovertido+2;
        }
        else if ($q16=='b16'){   
            $Extrovertido++;
        }
        else if ($q16=='c16'){   
            $Introvertido++;
        }
        else if ($q16=='d16'){   
            $Introvertido=$Introvertido+2;
        }




        if($q17=='a17'){   
            $Perceptivo=$Perceptivo+2;
        }
        else if ($q17=='b17'){   
            $Perceptivo++;
        }
        else if ($q17=='c17'){   
            $Julgador++;
        }
        else if ($q17=='d17'){   
            $Julgador=$Julgador+2;
        }



        if($q18=='a18'){   
            $Sentimental=$Sentimental+2;
        }
        else if ($q18=='b18'){   
            $Sentimental++;
        }
        else if ($q18=='c18'){   
            $Pensante++;
        }
        else if ($q18=='d18'){   
            $Pensante=$Pensante+2;
        }




        if($q19=='a19'){   
            $Intuitivo=$Intuitivo+2;
        }
        else if ($q19=='b19'){   
            $Intuitivo++;
        }
        else if ($q19=='c19'){   
            $Sensorial++;
        }
        else if ($q19=='d19'){   
            $Sensorial=$Sensorial+2;
        }



        if($q20=='a20'){   
            $Perceptivo=$Perceptivo+2;
        }
        else if ($q20=='b20'){   
            $Perceptivo++;
        }
        else if ($q20=='c20'){   
            $Julgador++;
        }
        else if ($q20=='d20'){   
            $Julgador=$Julgador+2;
        }



        if($q21=='a21'){   
            $Sentimental=$Sentimental+2;
        }
        else if ($q21=='b21'){   
            $Sentimental++;
        }
        else if ($q21=='c21'){   
            $Pensante++;
        }
        else if ($q21=='d21'){   
            $Pensante=$Pensante+2;
        }



        if($q22=='a22'){   
            $Intuitivo=$Intuitivo+2;
        }
        else if ($q22=='b22'){   
            $Intuitivo++;
        }
        else if ($q22=='c22'){   
            $Sensorial++;
        }
        else if ($q22=='d22'){   
            $Sensorial=$Sensorial+2;
        }



        if($q23=='a23'){   
            $Pensante=$Pensante+2;
        }
        else if ($q23=='b23'){   
            $Pensante++;
        }
        else if ($q23=='c23'){   
            $Sentimental++;
        }
        else if ($q23=='d23'){   
            $Sentimental=$Sentimental+2;
        }



        if($q24=='a24'){   
            $Introvertido=$Introvertido+2;
        }
        else if ($q24=='b24'){   
            $Introvertido++;
        }
        else if ($q24=='c24'){   
            $Extrovertido++;
        }
        else if ($q24=='d24'){   
            $Extrovertido=$Extrovertido+2;
        }



        if($q25=='a25'){   
            $Sentimental=$Sentimental+2;
        }
        else if ($q25=='b25'){   
            $Sentimental++;
        }
        else if ($q25=='c25'){   
            $Pensante++;
        }
        else if ($q25=='d25'){   
            $Pensante=$Pensante+2;
        }



        if($q26=='a26'){   
            $Intuitivo=$Intuitivo+2;
        }
        else if ($q26=='b26'){   
            $Intuitivo++;
        }
        else if ($q26=='c26'){   
            $Sensorial++;
        }
        else if ($q26=='d26'){   
            $Sensorial=$Sensorial+2;
        }





        if ($Introvertido>$Extrovertido && $Intuitivo>$Sensorial && $Pensante>$Sentimental && $Julgador>$Perceptivo){
             echo ('A sua personalidade é: INTJ');
             header('Location:Intj.php');
        }
        if ($Introvertido>$Extrovertido && $Intuitivo>$Sensorial && $Pensante>$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: INTP');
            header('Location:Intp.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo>$Sensorial && $Pensante>$Sentimental && $Julgador>$Perceptivo){
            echo ('A sua personalidade é: ENTJ');
            header('Location:ENTJ.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo>$Sensorial && $Pensante>$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: ENTP');
            header('Location:ENTP.php');
        }



        if ($Introvertido>$Extrovertido && $Intuitivo>$Sensorial && $Pensante<$Sentimental && $Julgador>$Perceptivo){
            echo ('A sua personalidade é: INFJ');
            header('Location:Infj.php');
        }
        if ($Introvertido>$Extrovertido && $Intuitivo>$Sensorial && $Pensante<$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: INFP');
            header('Location:Infp.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo>$Sensorial && $Pensante<$Sentimental && $Julgador>$Perceptivo){
            echo ('A sua personalidade é: ENFJ');
            header('Location:Enfj.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo>$Sensorial && $Pensante<$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: ENFP');
            header('Location:Enfp.php');
        }




        if ($Introvertido>$Extrovertido && $Intuitivo<$Sensorial && $Pensante>$Sentimental && $Julgador>$Perceptivo){
            echo ('A sua personalidade é: ISTJ');
            header('Location:Istj.php');
        }
        if ($Introvertido>$Extrovertido && $Intuitivo<$Sensorial && $Pensante<$Sentimental && $Julgador>$Perceptivo){
            echo ('A sua personalidade é: ISFJ');
            header('Location:Isfj.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo<$Sensorial && $Pensante>$Sentimental && $Julgador>$Perceptivo){
            echo ('A sua personalidade é: ESTJ');
            header('Location:Estj.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo<$Sensorial && $Pensante<$Sentimental && $Julgador>$Perceptivo){
            echo ('A sua personalidade é: ESFJ');
            header('Location:Esfj.php');
        }




        if ($Introvertido>$Extrovertido && $Intuitivo<$Sensorial && $Pensante>$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: ISTP');
            header('Location:Istp.php');
        }
        if ($Introvertido>$Extrovertido && $Intuitivo<$Sensorial && $Pensante<$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: ISFP');
            header('Location:Isfp.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo<$Sensorial && $Pensante>$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: ESTP');
            header('Location:Estp.php');
        }
        if ($Introvertido<$Extrovertido && $Intuitivo<$Sensorial && $Pensante<$Sentimental && $Julgador<$Perceptivo){
            echo ('A sua personalidade é: ESFP');
            header('Location:Esfp.php');
        }



        ?>
   </body>
</html>