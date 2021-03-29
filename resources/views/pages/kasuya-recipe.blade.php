<!DOCTYPE html>
<html>

<head>
    <title>Kasuya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <table class="border-collapse border border-gray-200" x-data="kasuyaApp()">
        <thead>
            <tr>
                <th colspan="5" class="border">kasuya 4:6 recipe</th>
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
                    <th colspan="2" class="border">
                        <input type="number" x-model="doseIn">
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
                    <th class="border">
                        <select x-model="ratio">
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                        </select>
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
                <th  class="border">Sweet/Acidity (40%)</th>

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
