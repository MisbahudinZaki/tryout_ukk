@extends('master')
@section('kalkulator')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table style="background: linear-gradient(to right, rgb(36, 36, 36), rgb(155, 155, 155), rgb(36,36,36 ));">
                <form action="{{route('hitung')}}" method="post">
                    @csrf
                    <tbody>
                        <tr>
                            <td colspan="4" align="center" style="color: white; font-size:24px;"><h3>KALKULATOR</h3></td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="angka1" id=""></td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="angka2" id=""></td>

                        </tr>
                        <tr>
                            <td colspan="2">
                                <select name="operator" class="operator">
                                    <option value="">---</option>
                                    <option value="kali">X</option>
                                    <option value="bagi">:</option>
                                    <option value="tambah">+</option>
                                    <option value="kurang">-</option>
                                </select>
                            </td>
                            <td><input type="submit" value="Hitung"></td>
                            <td><input type="submit" name="opr" value="Reset"></td>
                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="hasil" value=""></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="left" style="color:white; font-size: 24px;">
                                <p>MISBAHUDIN ZAKI</p>
                                <p>XII PPLG 1</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"> <a href="{{route('home')}}" class="btn btn-danger">Kembali</a></td>
                        </tr>

                    </tbody>
                </form>
            </table>


        </div>
    </div>
</div>

@endsection
