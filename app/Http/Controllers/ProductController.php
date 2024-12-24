<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    private $products = [
        [
            'id' => 1,
            'name' => 'ASUS ROG Phone 7 Ultimate',
            'description' => 'เป็นสมาร์ทโฟนเกมมิ่งที่ถูกออกแบบมาเพื่อมอบประสบการณ์การเล่นเกมที่เหนือระดับHigh-performance laptop',
            'price' => 15000,
            'img' => '/img/phon1.png'
        ],
        [
            'id' => 2,
            'name' => 'realme GT 7 Pro',
            'description' => 'สมาร์ทโฟนที่มาพร้อมชิปประมวลผลระดับสูง หน้าจอคุณภาพสูง และระบบระบายความร้อนที่ดีเยี่ยม เหมาะสำหรับการเล่นเกมที่ต้องการประสิทธิภาพสูง',
            'price' => 80000,
            'img' => '/img/phon2.png'
        ],
        [
            'id' => 3,
            'name' => 'REDMAGIC 9S Pro',
            'description' => 'มือถือเกมมิ่งที่มีดีไซน์เฉพาะตัว พร้อมด้วยปุ่มควบคุมเสริมและระบบระบายความร้อนที่ออกแบบมาเพื่อการเล่นเกมโดยเฉพาะ',
            'price' => 50000,
            'img' => '/img/phon3.png'
        ],
        [
            'id' => 4,
            'name' => 'TECNO POVA 6 NEO',
            'description' => 'สมาร์ทโฟนราคาประหยัดที่มาพร้อมแบตเตอรี่ขนาดใหญ่ 7000mAh และหน้าจอขนาด 6.78 นิ้ว รองรับการเล่นเกมได้ยาวนานPrecision gaming mouse',
            'price' => 10000,
            'img' => '/img/phon4.png'
        ],
        [
            'id' => 5,
            'name' => 'Infinix GT 20 Pro',
            'description' => 'สมาร์ทโฟนที่มีสเปคแรงในราคาที่คุ้มค่า มาพร้อมชิปประมวลผลที่สามารถรองรับเกมหนัก ๆ ได้อย่างลื่นไหล',
            'price' => 15000,
            'img' => '/img/phon5.png'
        ],
        [
            'id' => 6,
            'name' => 'POCO F6',
            'description' => 'สมาร์ทโฟนที่มีสเปคแรงในราคาที่คุ้มค่า มาพร้อมชิปประมวลผลที่สามารถรองรับเกมหนัก ๆ ได้อย่างลื่นไหล',
            'price' => 30000,
            'img' => '/img/phon6.png'
        ],
        [
            'id' => 7,
            'name' => 'iQOO 12 5G',
            'description' => 'มือถือเกมมิ่งดีไซน์มินิมอลที่มาพร้อมชิป Snapdragon 8 Gen 3 และหน้าจอคุณภาพสูง เหมาะสำหรับการเล่นเกมและการใช้งานทั่วไป',
            'price' => 20000,
            'img' => '/img/phon7.png'
        ],
        [
            'id' => 8,
            'name' => 'OnePlus Nord CE3 Lite 5G',
            'description' => 'สมาร์ทโฟนที่มาพร้อมชิปประมวลผลที่รองรับการเล่นเกมได้ดี และหน้าจอที่มีอัตราการรีเฟรชสูง เหมาะสำหรับคอเกมที่มีงบประมาณจำกัด',
            'price' => 2500,
            'img' => '/img/phon8.png'
        ],
        [
            'id' => 9,
            'name' => 'HONOR 90 Lite 5G',
            'description' => 'มือถือที่มาพร้อมสเปคที่สามารถรองรับการเล่นเกมได้อย่างลื่นไหล และดีไซน์ที่บางเบา เหมาะสำหรับการพกพา',
            'price' => 12000,
            'img' => '/img/phon9.png'
        ],
        [
            'id' => 10,
            'name' => 'Xiaomi Redmi Note 12 Pro 5G',
            'description' => 'มือถือที่มาพร้อมชิปประมวลผลที่สามารถรองรับการเล่นเกมได้อย่างลื่นไหล และแบตเตอรี่ที่มีความจุสูง เหมาะสำหรับการเล่นเกมในระยะยาว',
            'price' => 18000,
            'img' => '/img/phon10.png'
        ],
    ];

    public function index()
    {
        return Inertia::render('Products/index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = collect($this->products)->firstWhere('id', $id);

        if (!$product) {
            abort(404, 'Product not found');
        }

        return Inertia::render('Products/show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
