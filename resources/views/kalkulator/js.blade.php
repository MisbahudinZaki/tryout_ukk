@extends('master')
@section('kalkulator')

<form action="" method="post" name="form1">
    @csrf
    <table border="0" style="background: linear-gradient(135deg, rgb(36, 36, 36), rgb(155, 155, 155), rgb(36,36,36 ));">
        <tr>
            <td colspan="4" align="center" style="color: white; font-size:24px;"><h3>KALKULATOR</h3></td>
        </tr>
        <tr align="center">
            <td colspan="4"><input type="text" name="txt" id=""></td>
        </tr>
        <tr>
            <td colspan="2"><input type="reset" value="C"></td>
            <td><input type="button" value="X" onclick="form1.txt.value+='*'"></td>
            <td><input type="button" value=":" onclick="form1.txt.value+='/'"></td>
        </tr>

        <tr>
            <td><input type="button" value="9" onclick="form1.txt.value+='9'"></td>
            <td><input type="button" value="8" onclick="form1.txt.value+='8'"></td>
            <td><input type="button" value="7" onclick="form1.txt.value+='7'"></td>
            <td><input type="button" value="+" onclick="form1.txt.value+='+'"></td>
        </tr>
        <tr>
            <td><input type="button" value="6" onclick="form1.txt.value+='6'"></td>
            <td><input type="button" value="5" onclick="form1.txt.value+='5'"></td>
            <td><input type="button" value="4" onclick="form1.txt.value+='4'"></td>
            <td><input type="button" value="-" onclick="form1.txt.value+='-'"></td>
        </tr>
        <tr>
            <td><input type="button" value="3" onclick="form1.txt.value+='3'"></td>
            <td><input type="button" value="2" onclick="form1.txt.value+='2'"></td>
            <td><input type="button" value="1" onclick="form1.txt.value+='1'"></td>
            <td rowspan="2"><input type="button" style="height:150px;" value="=" onclick="form1.txt.value=eval(form1.txt.value)"></td>
        </tr>
        <tr>
            <td><input type="button" value="0" onclick="form1.txt.value+='0'"></td>
            <td><input type="button" value="000" onclick="form1.txt.value+='000'"></td>
            <td><input type="button" value="." onclick="form1.txt.value+='.'"></td>
        </tr>
        <tr>
            <td colspan="4" align="left" style="color:white; font-size: 24px;">
                <p>MISBAHUDIN ZAKI</p>
                <p>XII PPLG 1</p>
            </td>
        </tr>
    </table>
    <a href="{{route('home')}}" class="back">Kembali</a>
</form>
@endsection
