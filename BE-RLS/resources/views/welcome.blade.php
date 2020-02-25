<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div id="app">
        <div class="container">
            <div style="height: 400px;overflow-y: scroll;">
                <table class="table table-bordered text-center" style="margin-top:20px">
                    <thead>
                        <th>Nomor</th>
                        <th>X<sub>i</sub></th>
                        <th>Y<sub>i</sub></th>
                        <th>X<sup>2</sup></th>
                        <th>XY</th>
                    </thead>
                    <tbody>
                        <tr v-for="(n,index) in x">
                            <td>@{{index+1}}</td>
                            <td>@{{x[index]}}</td>
                            <td>@{{ y[index] }}</td>
                            <td>@{{ xkuadrat[index] }}</td>
                            <td>@{{ xy[index] }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>@{{ sumx }}</td>
                            <td>@{{ sumy }}</td>
                            <td>@{{ sumX2 }}</td>
                            <td>@{{ sumxy }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="container">
                <label for="exampleInputEmail1"> Input Data </label>
                <div class="row">
                    <table class="table table-bordered text-center" style="width:49%;margin-top:20px;margin-right:1%;">
                        <thead>
                            <th>X</th>
                            <th>Y</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input style="width: 100px;margin:auto;" type="text" class="form-control"
                                        v-model="xIn">
                                </td>
                                <td><input style="width: 100px;margin:auto;" type="text" class="form-control"
                                        v-model="yIn">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered text-center" style="width:49%;margin-top:20px;margin-left:1%;">
                        <thead>
                            <th >A</th>
                            <th >B</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>@{{a}}
                                </td>
                                <td>@{{b}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-outline-primary" type="button" id="button-addon1" @click="input"
                    style="float:left">Input</button>
            </div>
        </div>
    </div>
</body>
<script src="vue.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="my.js"></script>
<script>
</script>

</html>