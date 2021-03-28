<!DOCTYPE html>
<html>

<head>
    <title>{{ $title ?? 'Home page' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="grid grid-cols-5 divide-x divide-y border border-gray-200" x-data="app()">
        <div class="col-span-5">kasuya 4:6 recipe</div>

        <div class="col-span-5">Profile</div>

        <div class="col-span-2">Dose in</div>
        <div class="col-span-3">Dose out</div>

        <div class="col-span-2">
            <input type="number" x-model="doseIn">
        </div>
        <div class="col-span-3" x-text="doseOut">
        </div>

        <div>Balance</div>
        <div>
            <select>
                <option value="sweet">Sweet</option>
                <option value="normal">Normal</option>
                <option value="acidity">Acidity</option>
            </select>
        </div>
        <div>Ratio</div>
        <div>1:</div>
        <div>
            <select x-model="ratio">
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
            </select>
        </div>

        <div>Strength</div>
        <div>
             <select>
                <option value="weak">Weak</option>
                <option value="balance">Balance</option>
                <option value="strong">Strong</option>
            </select>
        </div>
        <div class="col-span-3">Sweet/Acidity (40%)</div>

        <div>TIME</div>
        <div>Target</div>
        <div>Sweet</div>
        <div>Normal</div>
        <div>Acidity</div>
    </div>

    <script>
        function app() {
            let doseOut = this.doseIn * this.ratio;
            return {
                doseIn: 10 + 10,
                ratio: 15,
                get doseOut() {
                    return this.doseIn * this.ratio;
                }
            }
        }
    </script>

</body>
</html>
