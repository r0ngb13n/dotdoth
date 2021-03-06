<!DOCTYPE html>
<html>

<head>
    <title>Kasuya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <table class="kasuyaTool text-center" x-data="kasuyaApp()"> 
        <thead>
            <tr>
                <th colspan="4">Kasuya 4:6 method</th>
            </tr>                       
            <tr>
                <th colspan="4">Profile</th>
            </tr>
            
            <tr>
                <th colspan="2" >Dose in</th>
                <th colspan="2" >Dose out</th>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="number" class="text-center" x-model="doseIn" autofocus placeholder="Lượng cà phê ban đầu">      
                </th>
                <th colspan="2" x-text="doseOut"></th>
            </tr>
            <tr>
                <th colspan="2">Sweet/Acidity</th>
                <th colspan="2">
                    <select x-model="balance">
                        <option value="sweet">Sweet</option>
                        <option value="normal">Normal</option>
                        <option value="acidity">Acidity</option>
                    </select>
                </th>
            </tr>
            <tr>
                <th colspan="2">Strength</th>
                <th colspan="2" class="border">
                    <select x-model="strength">
                        <option value="weak">Weak</option>
                        <option value="balance">Balance</option>
                        <option value="strong">Strong</option>
                    </select>
                </th>
                
            </tr>
            <tr>
                <th colspan="2">Time</th>
                <th colspan="2">
                    <span class="hidden sm:block">Target</span>
                    <span class="sm:hidden">Targ.</span>
                </th>
            </tr>
        </thead>

        <tbody>
            <template x-for="item in calculated" :key="item.time">
                <tr>
                    <td colspan="2" x-text="item.time"></td>
                    <td colspan="2" x-text="item.target <= doseOut ? item.target : 'END'"></td>
                </tr>
            </template>
        </tbody>
    </table>

    <script>
        function kasuyaApp() {
            let doseOut = this.doseIn * this.ratio;
            return {
                doseIn: 15,
                ratio: 15,
                balance: 'normal',
                strength: 'balance',
                get doseOut() {
                    return this.doseIn * this.ratio;
                },
                get calculated() {
                    const balances = {
                        sweet: 2,
                        normal: 3,
                        acidity: 4,
                    };

                    const strengths = {
                        weak: 0.3,
                        balance: 0.2,
                        strong: 0.15,
                    };

                    let data = [];
                    let times = ['00:00', '00:45', '01:30', '02:15', '03:00', '03:45', '04:30'];
                    for (let i = 0; i < times.length; i++) {
                        let target = 0;
                        if (i === 0) {
                            target = this.doseIn * balances[this.balance];
                        } else if (i === 1) {
                            target = this.doseOut * 0.4; // wtf
                        } else if (i < times.length) {
                            target = data[i-1].target + this.doseOut * strengths[this.strength];
                        } 

                        data[i] = {
                            time: times[i],
                            target: target,
                            sweet: '',
                            normal: '',
                            acidity: ''
                        };
                    }

                    return data;
                }
            }
        }
        </script>

    </body>
    </html>
