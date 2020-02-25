var app = new Vue({
    el: '#app',
    data: {
        xIn: 0,
        yIn: 0,
        x: [],
        y: [],
        xkuadrat: [],
        sumx: 0,
        sumy: 0,
        sumX2: 0,
        sumxy: 0,
        xy: [],
        n: 0,
        a: 0,
        b: 0,
        data: []
    },
    mounted() {
        this.getData()

    },
    created() {
        // this.getData()

    },
    methods: {
        getData: async function () {
            await axios.get("http://be-rls.oo/getDataAll", )
                .then(function (response) {
                    app.data = response.data;
                    app.n = response.data.length;

                })
                .catch(error => console.log(error))
            // console.log(this.n);
            // console.log(app.data)
            for (i = 0; i < app.n; i++) {
                this.x[i] = this.data[i].x
                this.y[i] = this.data[i].y
            }
            // console.log(this.x)
            this.kuadrat()
            this.dikali()
            this.hitKoordinat()
        },
        kuadrat: function () {
            for (i = 0; i < this.n; i++) {
                this.xkuadrat[i] = Math.pow(this.x[i], 2)
                this.sumX2 += this.xkuadrat[i]
                this.sumx += this.x[i]
                this.sumy += this.y[i]
            }
        },
        dikali: function () {
            for (i = 0; i < this.n; i++) {
                this.xy[i] = this.x[i] * this.y[i]
                this.sumxy += this.xy[i]
            }
        },
        hitKoordinat: function () {
            this.a = (((this.sumy * this.sumX2) - this.sumx) / ((this.n * this.sumX2) - Math.pow(this.sumx, 2))).toFixed(3)
            this.b = (((this.n * this.sumxy) - (this.sumx * this.sumy)) / ((this.n * this.sumx) - Math.pow(this.sumx, 2))).toFixed(3)
        },
        input: async function () {
            const params = new URLSearchParams();
            params.append('x', 1);
            params.append('y', 2);
            await axios.post('http://be-rls.oo/addData', params)
                .then(function (response) {
                    console.log(response);
                })
                .catch(error => console.log(error))
            this.getData()
        }
    }
})