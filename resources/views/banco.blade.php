<!DOCTYPE html>
<html>
<head>
    <title>Bàn cờ vua</title>
    <style>
        .o-co { width: 50px; height: 50px; }
        .den { background-color: green; }
        .trang { background-color: white; }
    </style>
</head>
<body>
    <h1>Bàn cờ kích thước {{ $n }}x{{ $n }}</h1>
    <table border="1" style="border-collapse: collapse;">
        @for ($i = 0; $i < $n; $i++)
            <tr>
                @for ($j = 0; $j < $n; $j++)
                    <td class="o-co {{ ($i + $j) % 2 == 0 ? 'trang' : 'den' }}"></td>
                @endfor
            </tr>
        @endfor
    </table>
</body>
</html>