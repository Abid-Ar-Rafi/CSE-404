@extends('layouts.app')

@section('content')
    <!-- <div class="content ">
        <div class="row">
             <form class="middle" action="/insert" method="post">
                 <table class="table ">
                    
                       <tr>
                            {{ csrf_field() }}
                            <td>Product name:</td>
                            <td><input type"text" name="product_name"></td>
                       </tr> 
                       <tr>
                            <td>Quantity:</td>
                            <td><input type"text" name="product_name"></td>
                       </tr> 
                       <tr>
                            <td>Price:</td>
                            <td><input type"text" name="product_name"></td>
                       </tr> 

                 </table>
                 <input type="submit" name="submit" value="Add item"><br>
             </form>
        --> 


<!doctype>
<html>
<!-- ....................jspdf................................ -->
    <title> js pdf</title>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="js/jspdf.min.js" ></script>
        <script type="text/javascript" src="js/html2canvas.js" ></script>
        
        <script type="text/javascript">
        
            function genPDF() {
                html2canvas(document.getElementById("testDiv"),{
                    onrendered: function(canvas){
                        
                        var img=canvas.toDataURL("image/png");
                        var doc= new jsPDF();
                        doc.addImage(img,'JPEG', 20,20);
                        doc.save('E-Receipt.pdf');
                        
                    }
                });
            }
            
        </script>
<!-- ....................end of jspdf................................ -->

<!-- ....................calculation................................ -->

 <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <script>
            
            function calc()
            {
                var n1 = parseFloat(document.getElementById('n1').value);
                var n2 = parseFloat(document.getElementById('n2').value);
                var n3 = parseFloat(document.getElementById('n3').value);

                var oper = document.getElementById('operators').value;
                
                if(oper === '+')
                {
                    document.getElementById('result').value = n1+n2+n3;
                }
                
                if(oper === '-')
                {
                    document.getElementById('result').value = n1-n2;
                }
                
                if(oper === '/')
                {
                    document.getElementById('result').value = n1/n2;
                }
                
                if(oper === 'X')
                {
                    document.getElementById('result').value = n1*n2;
                }
            }
            
        </script>
    <!-- ....................end of calculation................................ -->

    </head>
    
    <body>

<!-- ....................jspdf................................ -->
 

 <!-- ....................calculation................................ -->     
        <a href="javascript:genPDF()">Download PDF...</a> 

        <div id='testDiv'>
                <h5>Product</h5> <h5>Price</h5>
                <input type="text"/>

                <input type="text" id="n1"/><br/><br/>

                <input type="text"/>
                <input type="text" id="n2"/><br/><br/>

                <input type="text"/>
                <input type="text" id="n3"/><br/><br/>
                
                <select id="operators" class="hide">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="X">X</option>
                </select>
            
            <h5>Total cost = </h5>
            <input type="text" id="result"/>
            
        </div> 
        <button onclick="calc();">Calculate cost</button>
        <form method="get" action="/home">
             <button type="submit">Clear</button>
        </form>
        

<!-- ....................end of calculation................................ -->

<!-- ....................end of jspdf................................ -->


    </body>
</html>

@endsection
