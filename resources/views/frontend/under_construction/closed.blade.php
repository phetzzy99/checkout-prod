<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปิดปรับปรุงระบบยืมออนไลน์</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Micro Animation Keyframes */
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); opacity: 1; }
            70% { transform: scale(0.95); }
            100% { transform: scale(1); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @keyframes cursorGlow {
            0% { box-shadow: 0 0 5px rgba(99, 102, 241, 0.5); }
            50% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.8); }
            100% { box-shadow: 0 0 5px rgba(99, 102, 241, 0.5); }
        }

        @keyframes bgShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animate-bounce-in {
            animation: bounceIn 0.6s ease-out;
        }

        .animate-pulse:hover {
            animation: pulse 0.4s ease-in-out;
        }

        .bg-animated {
            background: linear-gradient(45deg, #e0e7ff, #f3e8ff, #e0f2fe, #f5f3ff);
            background-size: 400%;
            animation: bgShift 20s ease infinite;
        }

        /* Custom Cursor Animation */
        body {
            cursor: none; /* Hide default cursor */
        }

        .custom-cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            background: rgba(99, 102, 241, 0.7);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            animation: cursorGlow 1.5s ease-in-out infinite;
            z-index: 9999;
        }

        .custom-cursor.click {
            transform: translate(-50%, -50%) scale(0.5);
            background: rgba(168, 85, 247, 0.9);
            transition: transform 0.1s ease;
        }
    </style>
</head>
<body class="bg-animated flex items-center justify-center min-h-screen">
    <div class="custom-cursor" id="custom-cursor"></div>
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full text-center animate-bounce-in">
        <div class="mb-6">
            <svg class="mx-auto h-16 w-16 text-yellow-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <h1 class="text-2xl font-bold text-gray-800 mb-4">ระบบยืมออนไลน์</h1>
        <p class="text-gray-600 mb-4">ขออภัยในความไม่สะดวก ขณะนี้ระบบยืมออนไลน์อยู่ระหว่างการปิดปรับปรุงชั่วคราว เพื่อพัฒนาและเพิ่มประสิทธิภาพการให้บริการ</p>
        <p class="text-gray-600 mb-6">กรุณาติดตามการแจ้งเตือนจากเรา หรือกลับมาใช้งานอีกครั้งในภายหลัง</p>
        <a href="/" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300 animate-pulse">กลับสู่หน้าหลัก</a>
        <div class="mt-6 text-sm text-gray-500">
            © {{ date('Y') }} ระบบยืมออนไลน์. หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี.
        </div>
    </div>
    <script>
        // Custom Cursor Animation
        const cursor = document.getElementById('custom-cursor');
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        document.addEventListener('mousedown', () => {
            cursor.classList.add('click');
        });

        document.addEventListener('mouseup', () => {
            cursor.classList.remove('click');
        });
    </script>
</body>
</html>
