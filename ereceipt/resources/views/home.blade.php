@extends('layouts.app')

@section('content')

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
                var n4 = parseFloat(document.getElementById('n4').value);
                var n5 = parseFloat(document.getElementById('n5').value);

                var oper = document.getElementById('operators').value;
                
                if(oper === '+')
                {
                    document.getElementById('result').value = n1+n2+n3+n4+n5;
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
       
        
       

        <div id='testDiv'>
                <h5>Product</h5> <h5 class="price_header">Price</h5>
                <input type="text"/>

                <input type="text" id="n1"/><br/><br/>

                <input type="text"/>
                <input type="text" id="n2"/><br/><br/>

                <input type="text"/>
                <input type="text" id="n3"/><br/><br/>

                <input type="text"/>
                <input type="text" id="n4"/><br/><br/>

                <input type="text"/>
                <input type="text" id="n5"/><br/><br/>
                
                <select id="operators" class="hide">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="X">X</option>
                </select>
            
            <h5>Total cost = </h5>
            <input type="text" id="result"/>
            
        </div> 
 <!-- ....................end of jspdf................................ -->
        <div class="button_section">
            <button onclick="calc();">Calculate cost</button>
            <button > <a href="javascript:genPDF()">Download PDF</a></button>
            <form class="clear_button" method="get" action="/home">
                 <button type="submit">Clear</button>
            </form>
        </div>
        

<!-- ....................end of calculation................................ -->




<!-- .......................... Mail body start............................ -->
<div class="ereceipt_section">
<iframe src="{{URL("/email")}}"height="390" width="400" style="border:none"></iframe>
</div>
<!-- ............................. Mail body end.............................-->

    </body>
</html>

@endsection
