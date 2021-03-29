<!DOCTYPE html>
<html>

<head>
    <title>Kasuya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <table class="border-collapse border border-gray-200 w-full" x-data="kasuyaApp()">
        <thead>
            <tr>
                <th colspan="5" class="border uppercase text-xl">kasuya 4:6 recipe</th>
            </tr>
            <tr>
                <th colspan="5" class="border">Profile</th>
            </tr>
            <tr>
                <tr>
                    <th class="border" colspan="2">Dose in</th>
                    <th class="border" colspan="3">Dose out</th>
                </tr>
                <tr>
                    <th colspan="2" class="border text-center">
                        <input type="text" class="text-center bg-gray-200" x-model="doseIn" autofocus>
                    </th>
                    <th colspan="3" x-text="doseOut" class="border"></th>
                </tr>
                <tr>
                    <th class="border">Balance</th>
                    <th class="border">
                        <select x-model="balance">
                            <option value="sweet">Sweet</option>
                            <option value="normal">Normal</option>
                            <option value="acidity">Acidity</option>
                        </select>
                    </th>
                    <th class="border">Ratio</th>
                    <th class="border">1:</th>
                    <th class="border flex items-center space-x-1 justify-center">
                        <template x-for="value in [13, 14, 15, 16, 17]">
                            <span class="font-base text-base rounded px-1 cursor-pointer hover:border hover:border-green-500"
                             :class="{'bg-green-500': value === ratio}"
                             x-text="value"
                             @click="ratio = value"></span>
                        </template>
                    </th>
                </tr>
                <tr>
                    <th class="border">Strength</th>
                    <th class="border">
                       <select x-model="strength">
                            <option value="weak">Weak</option>
                            <option value="balance">Balance</option>
                            <option value="strong">Strong</option>
                        </select>
                    </th>
                    <th class="border" colspan="3">Sweet/Acidity (40%)</th>
                </tr>
            <tr>
                <th class="border">TIME</th>
                <th class="border">Target</th>
                <th class="border">Sweet</th>
                <th class="border">Normal</th>
                <th class="border">Acidity</th>
            </tr>
        </thead>

        <tbody>
            <template x-for="item in calculated" :key="item.time">
                <tr>
                    <td class="border" x-text="item.time"></td>
                    <td class="border text-right" x-text="item.target <= doseOut ? item.target : ''"></td>
                    <td class="border" x-text="item.sweet"></td>
                    <td class="border" x-text="item.normal"></td>
                    <td class="border" x-text="item.acidity"></td>
                </tr>
            </template>
        </tbody>
    </table>

    <script>
        function kasuyaApp() {
            let doseOut = this.doseIn * this.ratio;
            return {
                doseIn: 10 + 10,
                ratio: 15,
                balance: 'sweet',
                strength: 'strong',
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
                        } else {
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
