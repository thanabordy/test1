<?php
function fetch_set_stock_data() {
    // URL ที่ต้องการดึงข้อมูล
    $url = 'https://www.set.or.th/th/market/product/stock/quote/24CS/price';
    
    // ดึงข้อมูล HTML จาก URL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'
    ));
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        return json_encode(['error' => 'Unable to fetch data']);
    }

    // แปลงการเข้ารหัสเป็น UTF-8
    $response = mb_convert_encoding($response, 'HTML-ENTITIES', 'auto');

    // โหลด HTML เข้าไปใน DOMDocument
    $dom = new DOMDocument();
    @$dom->loadHTML($response);

    // สร้าง DOMXPath สำหรับการค้นหาด้วย XPath
    $xpath = new DOMXPath($dom);

    // XPath ที่ต้องการ
    $xpath_query = '/html/body/div[1]/div/div/div[2]/div[1]/div[6]/div/div/div[1]/div[2]';

    // ดึงข้อมูลที่ตรงกับ XPath
    $nodes = $xpath->query($xpath_query);

    if ($nodes->length > 0) {
        // ถ้าพบข้อมูล ให้ดึงข้อความภายใน
        $data = $nodes->item(0)->textContent;

        // ลบ \n \r \t และช่องว่างที่ไม่จำเป็น
        $data = preg_replace('/\s+/', ' ', $data);
        $data = trim($data);

        return json_encode(['data' => $data]);
    } else {
        // ถ้าไม่พบข้อมูล
        return json_encode(['error' => 'No data found for the given XPath']);
    }
}

// แสดงผลลัพธ์เป็น JSON
header('Content-Type: application/json');
echo fetch_set_stock_data();
?>
