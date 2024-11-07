<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    /* Reset and Global Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Fira Sans', sans-serif;
      background-color: #F0F8E1;
      color: #1F1D42;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Navbar Styles */
    .navbar {
      width: 100%;
      background-color: #333;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      z-index: 1000;
    }

    .navbar .logo {
      color: #fff;
      font-size: 1.5rem;
      font-weight: 600;
    }

    .navbar .nav-links a {
      color: #fff;
      margin-left: 20px;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background 0.3s;
    }

    .navbar .nav-links a:hover {
      background-color: #575757;
    }

    .navbar .nav-right {
      display: flex;
      align-items: center;
    }

    .filter-button {
      padding: 8px 16px;
      background-color: #2d7f0b;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 20px;
      transition: background 0.3s;
    }

    .filter-button:hover {
      background-color: #1a5c06;
    }

    .cart-icon {
      position: relative;
      cursor: pointer;
    }

    .cart-icon img {
      width: 30px;
      height: 30px;
    }

    .cart-badge {
      position: absolute;
      top: -5px;
      right: -10px;
      background-color: red;
      color: #fff;
      border-radius: 50%;
      padding: 2px 6px;
      font-size: 0.75rem;
    }

    /* Cart Dropdown */
    #cartDropdown {
      display: none;
      position: absolute;
      top: 60px;
      right: 30px;
      background-color: #333;
      color: #fff;
      padding: 20px;
      border-radius: 8px;
      width: 300px;
      z-index: 1000;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    #cartDropdown h4 {
      margin-bottom: 10px;
      border-bottom: 1px solid #575757;
      padding-bottom: 5px;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
    }

    .cart-item .item-info {
      display: flex;
      flex-direction: column;
    }

    .cart-item .item-info span {
      font-size: 0.9rem;
    }

    .cart-item button {
      background-color: red;
      border: none;
      color: #fff;
      padding: 4px 8px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.75rem;
    }

    .cart-item .quantity-controls {
      display: flex;
      align-items: center;
      gap: 5px;
      margin-top: 5px;
    }

    .cart-item .quantity-controls button {
      background-color: #555;
      border: none;
      color: #fff;
      padding: 2px 6px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.75rem;
    }

    /* Main Content */
    .main {
      flex: 1;
      padding: 50px 30px 30px; /* Top padding to account for fixed navbar and image gallery */
    }

    /* Slideshow-Style Horizontal Image Gallery */
    .image-gallery-wrapper {
      width: 100%;
      overflow: hidden;
      background-color: #F0F8E1;
      padding-top: 60px; /* To account for fixed navbar */
      position: relative;
      z-index: 500;
      height: 150px; /* Fixed height to prevent layout shifts */
    }

    .image-gallery {
      display: flex;
      width: 100%;
      height: 150px; /* Match the wrapper's height */
      position: relative;
    }

    .slide {
      min-width: 100%;
      transition: opacity 1s ease-in-out;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
    }

    .slide.active {
      opacity: 1;
      position: relative;
    }

    .slide img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    /* Cards Container */
    .cards-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    /* Card Styles */
    .card {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 12px rgba(0,0,0,0.2);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s;
    }

    .card:hover img {
      transform: scale(1.05);
    }

    .card-content {
      padding: 15px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .card-title {
      font-size: 1.25rem;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .card-description {
      flex: 1;
      font-size: 0.9rem;
      margin-bottom: 15px;
      color: #555;
    }

    .quantity-selector {
      display: flex;
      align-items: center;
      gap: 5px;
      margin-bottom: 10px;
    }

    .quantity-selector button {
      background-color: #2d7f0b;
      border: none;
      color: #fff;
      padding: 4px 8px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.9rem;
      transition: background 0.3s;
    }

    .quantity-selector button:hover {
      background-color: #1a5c06;
    }

    .quantity-selector input {
      width: 40px;
      text-align: center;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 4px;
      font-size: 0.9rem;
    }

    .card-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .card-buttons button {
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
      font-size: 0.9rem;
    }

    .add-to-cart {
      background-color: #2d7f0b;
      color: #fff;
    }

    .add-to-cart:hover {
      background-color: #1a5c06;
    }

    .buy-now {
      background-color: #f39c12;
      color: #fff;
    }

    .buy-now:hover {
      background-color: #d35400;
    }

    .detail-link {
      margin-top: 10px;
      text-align: center;
      color: #2d7f0b;
      font-weight: 600;
      cursor: pointer;
      transition: color 0.3s;
    }

    .detail-link:hover {
      color: #1a5c06;
    }

    /* Sidebar Styles */
    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      top: 0;
      right: 0;
      background: linear-gradient(to bottom, #E8DAEF, #A8D5BA, #F7E7CE);
      color: #fff;
      overflow-x: hidden;
      transition: width 0.5s;
      padding-top: 60px;
      z-index: 1000;
      border-radius: 8px;
    box-shadow: 0 0 0 4px #FFFFFF; 
    border: 2px solid #007BFF;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 36px;
      cursor: pointer;
    }

    .sidebar-content {
      padding: 20px;
    }

    .sidebar-content h2 {
      margin-bottom: 20px;
    }

    .sidebar-content img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    /* Responsive Adjustments */
    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar .nav-links {
        margin-top: 10px;
      }

      #cartDropdown {
        right: 10px;
      }

      .image-gallery-wrapper {
        padding: 60px 10px 20px;
        height: 100px; /* Reduced height for smaller screens */
      }

      .slide img {
        height: 100px; /* Adjust image height for smaller screens */
      }

      .main {
        padding: 160px 20px 20px; /* Adjusted padding-top for smaller screens */
      }

      .quantity-selector input {
        width: 30px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo"><p style="font-size: 32px; font-weight: bold; color: #4CAF50; border: 2px solid #4CAF50; padding: 5px; display: inline;">
    एग्रीक्योर
                </p></div>
    <div class="nav-right">
      <button class="filter-button">फ़िल्टर</button>
      <div class="cart-icon" onclick="toggleCartDropdown()">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/shopping-cart.png" alt="Cart">
        <span id="cartBadge" class="cart-badge">0</span>
      </div>
      <div id="cartDropdown">
        <h4>आपकी कार्ट</h4>
        <div id="cartItems">
          <p>आपकी कार्ट खाली है।</p>
        </div>
      </div>
    </div>
  </div>

<!-- Slideshow-Style Horizontal Image Gallery -->
<div class="image-gallery-wrapper" style="overflow: hidden; width: 100%; height: auto;">
    <div class="image-gallery" style="display: flex; transition: transform 0.5s ease;">
        <!-- Slide 1 -->
        <div class="slide active">
            <img src="images/about4.jpg" alt="Featured Product 1" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Slide 2 -->
        <div class="slide">
            <img src="images/about8.avif" alt="Featured Product 2" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <img src="images/about9.jpg" alt="Featured Product 3" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <img src="images/about1.jpg" alt="Featured Product 3" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Optional: Add more slides below as needed -->
        <!-- Example:
        <div class="slide">
            <img src="images/your-image4.jpg" alt="Featured Product 4" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        -->
    </div>
</div>


  <!-- Main Content -->
  <div class="main">
    <div class="cards-container">
<div class="card">
    <img src="images/ferti.jpg" alt="Product 1">
    <div class="card-content">
        <div class="card-title">एन.पी.के उर्वरक</div>
        <div class="card-description">
        एन.पी.के उर्वरक में नाइट्रोजन, फॉस्फोरस और पोटैशियम होता है जो पौधों के स्वस्थ विकास के लिए महत्वपूर्ण है। बागवानी के लिए आदर्श।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹165
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('N.P.K Fertilizer')">-</button>
            <input type="number" id="qty-N.P.K Fertilizer" value="1" min="1">
            <button onclick="increaseQuantity('N.P.K Fertilizer')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('N.P.K Fertilizer')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('N.P.K Fertilizer')">अभी खरीदें</button>
        </div>
        <div class="detail-link" onclick="openSidebar('N.P.K Fertilizer')">विवरण देखें</div>
    </div>
</div>

<!-- Card 2 -->
<div class="card">
    <img src="images/opulent.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">जिंक सल्फेट</div>
        <div class="card-description">
        आधुनिक विशेषताओं के साथ कालातीत डिज़ाइन। किसी भी अवसर के लिए उत्तम।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹250 
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Zinc Sulfate')">-</button>
            <input type="number" id="qty-Zinc Sulfate" value="1" min="1">
            <button onclick="increaseQuantity('Zinc Sulfate')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Zinc Sulfate')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Zinc Sulfate')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Zinc Sulfate')">विवरण देखें</div>
    </div>
</div>
      

<!-- Card 3 -->
<div class="card">
    <img src="images/ferti2.jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">म्यूरेट ऑफ पोटाश (एमओपी)</div>
        <div class="card-description">
        रोजमर्रा के उपयोग के लिए डिज़ाइन किए गए हल्के और आरामदायक स्नीकर्स।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹330 
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Muriate of Potash')">-</button>
            <input type="number" id="qty-Muriate of Potash" value="1" min="1">
            <button onclick="increaseQuantity('Muriate of Potash')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Muriate of Potash')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Muriate of Potash')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Muriate of Potash')">विवरण देखें</div>
    </div>
</div>


<!-- Card 4 -->
<div class="card">
    <img src="images/dap.webp" alt="Product 4">
    <div class="card-content">
        <div class="card-title">डाई-एमोनियम फॉस्फेट (DAP)</div>
        <div class="card-description">
        इस चिकनी और ऊर्जा-सक्षम लैंप से अपने स्थान को रोशन करें।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹730
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Di-Ammonium Phosphate')">-</button>
            <input type="number" id="qty-Di-Ammonium Phosphate" value="1" min="1">
            <button onclick="increaseQuantity('Di-Ammonium Phosphate')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Di-Ammonium Phosphate')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Di-Ammonium Phosphate')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Di-Ammonium Phosphate')">विवरण देखें</div>
    </div>
</div>


<!-- card 5-->
<div class="card">
    <img src="images/urea.webp" alt="Product 1">
    <div class="card-content">
        <div class="card-title">नाइट्रोजन (N): यूरिया</div>
        <div class="card-description">
        यूरिया एक अत्यधिक संकेंद्रित नाइट्रोजन उर्वरक है, जिसमें लगभग 46% नाइट्रोजन होता है, जो तेजी से पौधों की वृद्धि को बढ़ावा देता है।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹561
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Urea')">-</button>
            <input type="number" id="qty-Urea" value="1" min="1">
            <button onclick="increaseQuantity('Urea')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Urea')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Urea')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Urea')">विवरण देखें</div>
    </div>
</div>

<!-- Card 6 -->
<div class="card">
    <img src="images/Dhanuka EM 1.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">धनुका EM 1 (Emamectin Benzoate 5% SG) कीटाणुनाशक </div>
        <div class="card-description">
        बोलवर्म/पिंक बोलवर्म, फल और तने का बोरर, डायमंडबैक मथ, थ्रिप्स, स्पाइडर पॉड बोरर, और सभी अन्य कैटरपिलर।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹426
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Dhanuka EM 1')">-</button>
            <input type="number" id="qty-Dhanuka EM 1" value="1" min="1">
            <button onclick="increaseQuantity('Dhanuka EM 1')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Dhanuka EM 1')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Dhanuka EM 1')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Dhanuka EM 1')">विवरण देखें</div>
    </div>
</div>

<!-- Card 7 -->
<div class="card">
    <img src="images/FMC Coragen .jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">FMC Coragen (Chlorantraniliprole 18.5% SC)</div>
        <div class="card-description">
        दीमक, प्रारंभिक शूट बोरर और टॉप बोरर, स्पॉटेड बोलवर्म, पिंक स्टेम बोरर, फॉल आर्मीवॉर्म, फल बोरर, पत्ते मोड़ने वाला, पॉड फ्लाई, पत्ते खाने वाला कैटरपिलर।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹380
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('FMC Coragen')">-</button>
            <input type="number" id="qty-FMC Coragen" value="1" min="1">
            <button onclick="increaseQuantity('FMC Coragen')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('FMC Coragen')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('FMC Coragen')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('FMC Coragen')">विवरण देखें</div>
    </div>
</div>

<!-- Card 8 -->
<div class="card">
    <img src="images/Dhanuka Areva.jpg" alt="Product 4">
    <div class="card-content">
        <div class="card-title">Areva (Thiamethoxam 25% WG) Insecticide -</div>
        <div class="card-description">
        स्टेम बोरर, गैल मिज, पत्ते मोड़ने वाला, WBPH (व्हाइट-बैक प्लांटहॉपर), BPH (ब्राउन प्लांटहॉपर), GLH (ग्रीन लीफहॉपर), जेसिड, एफिड, थ्रिप्स, सफेद मक्खी, जेसिड, एफिड, साइला।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹368
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Dhanuka Areva')">-</button>
            <input type="number" id="qty-Dhanuka Areva" value="1" min="1">
            <button onclick="increaseQuantity('Dhanuka Areva')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Dhanuka Areva')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Dhanuka Areva')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Dhanuka Areva')">विवरण देखें</div>
    </div>
</div>


<!-- Card 9 -->
<div class="card">
    <img src="images/Syngenta Alika.jpg" alt="Product 1">
    <div class="card-content">
        <div class="card-title">Syngenta Alika Insecticide -</div>
        <div class="card-description">
        जासिद, एफिड, थ्रिप्स, बोवर्म, सफेद मक्खी और फल की कीड़ा, तना मक्खी, सेमीलूपर, गिर्डल बीटल, पत्ते की हॉपर्स, पत्ते खाने वाली कैटरपिलर, शूट फ्लाई, तना बोवर, चाय बग।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹194
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Syngenta Alika')">-</button>
            <input type="number" id="qty-Syngenta Alika" value="1" min="1">
            <button onclick="increaseQuantity('Syngenta Alika')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Syngenta Alika')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Syngenta Alika')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Syngenta Alika')">विवरण देखें</div>
    </div>
</div>


<!-- Card 10 -->
<div class="card">
    <img src="images/Dhanuka Fax.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">Dhanuka Fax (Fipronil 5% SC)</div>
        <div class="card-description">
        तना बोवर, भूरे रंग की योजना हॉपर्स, हरे पत्ते की हॉपर्स, डायमंडबैक मोथ, थ्रिप्स, एफिड, फल कीड़ा, प्रारंभिक शूट बोवर और रूट बोवर, एफिड, जासिद, गुलाबी बोवर्म।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹164
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Dhanuka Fax')">-</button>
            <input type="number" id="qty-Dhanuka Fax" value="1" min="1">
            <button onclick="increaseQuantity('Dhanuka Fax')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Dhanuka Fax')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Dhanuka Fax')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Dhanuka Fax')">विवरण देखें</div>
    </div>
</div>


<!-- Card 11 -->
<div class="card">
    <img src="images/Iffco.jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">Iffco</div>
        <div class="card-description">
        IFFCO के नाइट्रोजन-फिक्सिंग जैव-उर्वरक हैं Rhizobium, Azotobacter, और Acetobacter। फॉस्फेट घुलनशील बैक्टीरिया (PSB)
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹225
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Iffco')">-</button>
            <input type="number" id="qty-Iffco" value="1" min="1">
            <button onclick="increaseQuantity('Iffco')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Iffco')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Iffco')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Iffco')">विवरण देखें</div>
    </div>
</div>


<!-- Card 12 -->
<div class="card">
    <img src="images/Iffco-mc.jpg" alt="Product 4">
    <div class="card-content">
        <div class="card-title">IFFCO-MC</div>
        <div class="card-description">
        IFFCO-MC क्रॉप साइंस प्राइवेट लिमिटेड (IFFCO-MC) किसानों के लिए कीटाणुनाशक, फंगिसाइड, और जैव उर्वरक सहित उत्पादों और सेवाओं की एक श्रृंखला प्रदान करता है
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹290
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Iffco-mc')">-</button>
            <input type="number" id="qty-Iffco-mc" value="1" min="1">
            <button onclick="increaseQuantity('Iffco-mc')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Iffco-mc')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Iffco-mc')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Iffco-mc')">विवरण देखें</div>
    </div>
</div>

<!-- Card 13 -->
<div class="card">
    <img src="images/Iffco azotobacter.jpg" alt="Product 1">
    <div class="card-content">
        <div class="card-title">IFFCO अजोटोबैक्टर</div>
        <div class="card-description">
        यह गैर-संपोषक नाइट्रोजन-फिक्सिंग बैक्टीरिया है जो धान, गेहूं, बाजरा, कपास, टमाटर, गोभी, सरसों, और सैफ्लावर जैसी गैर-फली फसलों के लिए अनुशंसित है।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹125
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Iffco azotobacter')">-</button>
            <input type="number" id="qty-Iffco azotobacter" value="1" min="1">
            <button onclick="increaseQuantity('Iffco azotobacter')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Iffco azotobacter')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Iffco azotobacter')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Iffco azotobacter')">विवरण देखें</div>
    </div>
</div>


<!-- Card 14 -->
<div class="card">
    <img src="images/Calsiphos.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">कैलसिफोस</div>
        <div class="card-description">
        गेहूं, धान, मक्का, दालें, गन्ना, सब्जियां, कपास जैसी फसलों में बेसल अनुप्रयोग के लिए उपयोग किया जाता है।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹100
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Calsiphos')">-</button>
            <input type="number" id="qty-Calsiphos" value="1" min="1">
            <button onclick="increaseQuantity('Calsiphos')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Calsiphos')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Calsiphos')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Calsiphos')">विवरण देखें</div>
    </div>
</div>

<!-- Card 15 -->
<div class="card">
    <img src="images/Gypsum.jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">जिप्सम</div>
        <div class="card-description">
        जिप्सम मूंगफली के किसानों और कुछ हद तक तरबूज के किसानों के लिए विशेष रूप से उपयोगी रहा है।
        </div>
        <h5 style="color: olive;">मूल्य:</h5> ₹64
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Gypsum')">-</button>
            <input type="number" id="qty-Gypsum" value="1" min="1">
            <button onclick="increaseQuantity('Gypsum')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Gypsum')">कार्ट में जोड़ें</button>
            <button class="buy-now" onclick="buyNow('Gypsum')">अभी खरीदें</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Gypsum')">विवरण देखें</div>
    </div>
</div>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    // Define prices for each product
    const productPrices = {
        'N.P.K Fertilizer': 165, // Price per unit for N.P.K Fertilizer
        'Zinc Sulfate':250, // Price per unit for Zinc Sulfate
        'Muriate of Potash': 330, // Price per unit for Muriate of Potash
        'Di-Ammonium Phosphate': 730, // Price per unit for Di-Ammonium Phosphate
        'Urea': 561, // Price per unit for Urea
        'Dhanuka EM 1':426, // Price per unit for Dhanuka EM 1
        'FMC Coragen': 380, // Price per unit for FMC Coragen
        'Dhanuka Areva': 368, // Price per unit for Dhanuka Areva
        'Syngenta Alika': 194, // Price per unit for Syngenta Alika
        'Dhanuka Fax': 164, // Price per unit for Dhanuka Fax
        'Iffco': 225, // Price per unit for Iffco
        'Iffco-mc': 290, // Price per unit for Iffco-mc
        'Iffco azotobacter': 125, // Price per unit for Iffco azotobacter
        'Calsiphos': 100, // Price per unit for Calsiphos
        'Gypsum': 64, // Price per unit for Gypsum
    };

    function buyNow(productName) {
        const qtyInput = document.getElementById(`qty-${productName}`);
        const quantity = qtyInput.value;
        const totalAmount = productPrices[productName] * quantity * 100; // Razorpay expects the amount in paise

        const options = {
            key: 'rzp_test_gohih1rSqKzp4n', // Your Razorpay Test Key
            amount: totalAmount, // Amount in paise
            currency: 'INR',
            name: productName,
            description: 'Purchase of ' + productName,
            handler: function (response) {
                alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);
                // Optionally, redirect to a success page or update your order status
            },
            prefill: {
                name: '', // Optional: Add user's name
                email: '', // Optional: Add user's email
                contact: '', // Optional: Add user's contact number
            },
            notes: {
                address: '', // Optional: Add any additional notes
            },
            theme: {
                color: '#F37254' // Customize the color of the Razorpay checkout form
            }
        };

        const rzp = new Razorpay(options);
        rzp.open();
        event.preventDefault();
    }

    function decreaseQuantity(productName) {
        const qtyInput = document.getElementById(`qty-${productName}`);
        if (qtyInput.value > 1) {
            qtyInput.value = parseInt(qtyInput.value) - 1;
        }
    }

    function increaseQuantity(productName) {
        const qtyInput = document.getElementById(`qty-${productName}`);
        qtyInput.value = parseInt(qtyInput.value) + 1;
    }

    function addToCart(productName) {
        // Implement add to cart functionality
        alert(productName + ' added to cart!');
    }

    function openSidebar(productName) {
        // Implement sidebar opening functionality
        alert('Opening details for ' + productName);
    }
</script>


      <!-- Add more cards as needed -->
    </div>
  </div>

  <!--HR Animation-->
  <div style="position: relative; width: 80%; margin: 20px auto;">
    <hr style="
        border: none; 
        height: 5px; 
        background: #ff7e5f; 
        width: 0; 
        animation: progress 3s ease-in-out infinite; 
    " />
</div>

<style>
    @keyframes progress {
        0% { width: 0%; }
        25% { width: 100%; }
        100% { width: 0%; }
    }
</style>


  <!-- Sidebar -->
  <div id="productSidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
    <div class="sidebar-content" id="sidebarContent">
      <h2>Product Details</h2>
      <p>Select a product to see its details here.</p>
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    let cart = {};

    // Initialize cart display and slideshow
    document.addEventListener('DOMContentLoaded', () => {
      displayCartItems();
      startSlideshow();
    });

    /* Slideshow Functionality */
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    let slideInterval;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
          slide.classList.add('active');
        }
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
      showSlide(currentSlide);
    }

    function startSlideshow() {
      slideInterval = setInterval(nextSlide, 3000); // Change image every 3 seconds
    }

    function pauseSlideshow() {
      clearInterval(slideInterval);
    }

    // Optional: Pause slideshow on hover and resume on mouse leave
    const imageGalleryWrapper = document.querySelector('.image-gallery-wrapper');
    imageGalleryWrapper.addEventListener('mouseenter', pauseSlideshow);
    imageGalleryWrapper.addEventListener('mouseleave', startSlideshow);

    /* Cart Functionality */
    function addToCart(productName) {
      const quantityInput = document.getElementById(`qty-${productName}`);
      let quantity = parseInt(quantityInput.value);

      if (quantity < 1 || isNaN(quantity)) {
        alert("Quantity must be at least 1.");
        return;
      }

      if (cart[productName]) {
        cart[productName] += quantity;
      } else {
        cart[productName] = quantity;
      }

      updateCartBadge();
      displayCartItems();
      alert(`${quantity} x ${productName} added to cart.`);
    }

    function updateCartBadge() {
      const cartBadge = document.getElementById('cartBadge');
      let totalItems = 0;
      for (let product in cart) {
        totalItems += cart[product];
      }
      cartBadge.textContent = totalItems;
    }

    function displayCartItems() {
      const cartItemsContainer = document.getElementById('cartItems');
      cartItemsContainer.innerHTML = '';

      if (Object.keys(cart).length === 0) {
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        return;
      }

      for (let product in cart) {
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item';
        cartItem.innerHTML = `
          <div class="item-info">
            <span>${product}</span>
            <div class="quantity-controls">
              <button onclick="decreaseCartItem('${product}')">-</button>
              <span>${cart[product]}</span>
              <button onclick="increaseCartItem('${product}')">+</button>
            </div>
          </div>
          <button onclick="removeCartItem('${product}')">Remove</button>
        `;
        cartItemsContainer.appendChild(cartItem);
      }
    }

    function removeCartItem(productName) {
      delete cart[productName];
      updateCartBadge();
      displayCartItems();
    }

    function decreaseCartItem(productName) {
      if (cart[productName] > 1) {
        cart[productName] -= 1;
        updateCartBadge();
        displayCartItems();
      } else {
        removeCartItem(productName);
      }
    }

    function increaseCartItem(productName) {
      cart[productName] += 1;
      updateCartBadge();
      displayCartItems();
    }

    function toggleCartDropdown() {
      const dropdown = document.getElementById('cartDropdown');
      dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    /* Sidebar Functionality */
    function openSidebar(productName) {
      const sidebar = document.getElementById('productSidebar');
      const sidebarContent = document.getElementById('sidebarContent');

      // Define product details based on productName
      const productDetails = {
        'N.P.K Fertilizer': {
          description: '<h6 style="color: olive;">उत्पाद का नाम:</h6> N.P.K उर्वरक<br><h6 style="color: olive;">उत्पाद सामग्री:</h6> सामान्यतः 15-15-15 (N-P-K अनुपात) या अन्य भिन्नताएं जैसे 20-20-20.<br><h6 style="color: olive;">क्रियाविधि:</h6> पोषक तत्व आपूर्ति (आवश्यक मैक्रोन्यूट्रिएंट प्रदान करता है)<br><h6 style="color: olive;">कीट नियंत्रण:</h6> N/A (कीटाणुनाशक नहीं है)<br><h6 style="color: olive;">कृषि फसलें:</h6> फलों, सब्जियों और अनाज सहित विभिन्न फसलों के लिए उपयुक्त।<br><h6 style="color: olive;">कंपनी का नाम:</h6> [आपकी कंपनी का नाम]<br><h6 style="color: olive;">उपयोग दर:</h6> फसल और मिट्टी की स्थिति के आधार पर 100-200 किलोग्राम/एकड़।',
          image: 'images/npk.jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹165'
        },
        'Zinc Sulfate': {
          description: '<h6 style="color: teal;">उत्पाद का नाम:</h6> पोटाश का म्यूरेट<br><h6 style="color: teal;">उत्पाद सामग्री:</h6> 60% पोटेशियम ऑक्साइड (K₂O)<br><h6 style="color: teal;">क्रियाविधि:</h6> पोषक तत्व आपूर्ति<br><h6 style="color: teal;">कीट नियंत्रण:</h6> N/A (कीटाणुनाशक नहीं है, लेकिन एक उर्वरक है)<br><h6 style="color: teal;">कृषि फसलें:</h6> आलू, टमाटर, फल, सब्जियां और अन्य फसलें<br><h6 style="color: teal;">कंपनी का नाम:</h6> [आपकी कंपनी का नाम]<br><h6 style="color: teal;">उपयोग दर:</h6> फसल के आधार पर 50-150 किलोग्राम/एकड़।',
          image: 'images/ferti1.webp',
          price: '<h5 style="color: olive;">कीमत:</h5> ₹250'
        },
        'Muriate of Potash': {
          description: '<h6 style="color: teal;">उत्पाद का नाम:</h6> डाई-एमोनियम फॉस्फेट<br><h6 style="color: teal;">उत्पाद सामग्री:</h6> 18% नाइट्रोजन और 46% फॉस्फेट<br><h6 style="color: teal;">क्रियाविधि:</h6> पोषक तत्व आपूर्ति<br><h6 style="color: teal;">कीट नियंत्रण:</h6> N/A (कीटाणुनाशक नहीं है, लेकिन एक उर्वरक है)<br><h6 style="color: teal;">कृषि फसलें:</h6> गेहूं, मक्का, सोयाबीन, फल, सब्जियां और अन्य फसलें<br><h6 style="color: teal;">कंपनी का नाम:</h6> [आपकी कंपनी का नाम]<br><h6 style="color: teal;">उपयोग दर:</h6> फसल के आधार पर 100-200 किलोग्राम/एकड़।',
          image: 'images/ferti2.jpg',
          price: '<h5 style="color: olive;">कीमत:</h5> ₹330'
        },
        'Di-Ammonium Phosphate': {
          description: '<h6 style="color: teal;">उत्पाद का नाम:</h6> डाई-एमोनियम फॉस्फेट<br><h6 style="color: teal;">उत्पाद सामग्री:</h6> 18% नाइट्रोजन और 46% फॉस्फेट<br><h6 style="color: teal;">क्रियाविधि:</h6> पोषक तत्व आपूर्ति<br><h6 style="color: teal;">कीट नियंत्रण:</h6> N/A (कीटाणुनाशक नहीं है, लेकिन एक उर्वरक है)<br><h6 style="color: teal;">कृषि फसलें:</h6> गेहूं, मक्का, सोयाबीन, फल, सब्जियां और अन्य फसलें<br><h6 style="color: teal;">कंपनी का नाम:</h6> [आपकी कंपनी का नाम]<br><h6 style="color: teal;">उपयोग दर:</h6> फसल के आधार पर 100-200 किलोग्राम/एकड़।',
         image: 'images/dap.webp',
          price: '<h5 style="color: olive;">कीमत:</h5> ₹730'
        },
        'Urea': {
          description: '<h6 style="color: teal;">उत्पाद का नाम:</h6> यूरिया<br><h6 style="color: teal;">उत्पाद सामग्री:</h6> 46% नाइट्रोजन<br><h6 style="color: teal;">क्रियाविधि:</h6> पोषक तत्व आपूर्ति<br><h6 style="color: teal;">कीट नियंत्रण:</h6> N/A (कीटाणुनाशक नहीं है, लेकिन एक उर्वरक है)<br><h6 style="color: teal;">कृषि फसलें:</h6> गेहूं, मक्का, चावल, कपास और अन्य फसलें<br><h6 style="color: teal;">कंपनी का नाम:</h6> [आपकी कंपनी का नाम]<br><h6 style="color: teal;">उपयोग दर:</h6> फसल के आधार पर 50-200 किलोग्राम/एकड़।',
         image: 'images/urea.webp',
          price: '<h5 style="color: olive;">कीमत:</h5> ₹561'
        },
        'Dhanuka EM 1': {
          description: '<h6 style="color: green;">उत्पाद का नाम:</h6> EM1 कीटनाशक<br><h6 style="color: green;">उत्पाद सामग्री:</h6> Emamectin Benzoate 5% SG<br><h6 style="color: green;">कंपनी का नाम:</h6> धनुका एग्रीटेक लिमिटेड<br><h6 style="color: green;">कृषि फसलें:</h6> कपास, भिंडी, गोभी, मिर्च, बैंगन, पिगन पी, अंगूर, चने और अन्य फसलें<br><h6 style="color: green;">उपयोग दर:</h6> 0.5 ग्राम/लीटर.<br>8 ग्राम/पंप (15-लीटर पंप)<br>स्प्रे के लिए 80 ग्राम/एकड़।',
          image: 'images/Dhanuka EM 1.jpg',
          price: '<h5 style="color: olive;">कीमत:</h5> ₹426'
        },
        'FMC Coragen': {
          description: '<h6 style="color:green;">उत्पाद का नाम</h6>कोरजन कीटनाशक <h6 style="color:green;">उत्पाद सामग्री:</h6>क्लोरान्ट्रानिलिप्रोल 18.5% SC <br><h6 style="color:green;">क्रियाविधि:</h6>सिस्टमेटिक और संपर्क <br><h6 style="color:green;">कंपनी का नाम:</h6>FMC <br><h6 style="color:green;">कीट नियंत्रण:</h6>टर्माइट्स, प्रारंभिक शूट बोरर और टॉप बोरर, डायमंडबैक मोथ, ग्रीन सेमिलूपर, स्टेम फ्लाई और गिर्डल बीटल, अमेरिकन बॉलवॉर्म, स्पॉटेड बॉलवॉर्म, तंबाकू कैटरपिलर, स्टेम बोरर, पिंक स्टेम बोरर, फॉल आर्मीवॉर्म, फ्रूट बोरर, पत्ते-कटने वाली फल मक्खी, पत्ते-खाने वाली कैटरपिलर <br><h6 style="color:green;">कृषि फसलें:</h6>गन्ना, गोभी, सोयाबीन, कपास, मक्का, टमाटर, मूंगफली, मिर्च, चने, बैंगन, चावल, पिगन पी, bottle gourd और भिंडी <br><h6 style="color:green;">उपयोग दर:</h6>0.4 मि.ली./लीटर. <br>6 मि.ली./पंप (15-लीटर पंप) <br>स्प्रे के लिए 60 मि.ली./एकड़।',
          image: 'images/FMC Coragen .jpg',
          price: '<h5 style="color: olive;">कीमत:</h5> ₹380'
        },
        'Dhanuka Areva': {
    description: '<h6 style="color: green;">उत्पाद का नाम:</h6> Areva कीटनाशक<br><h6 style="color: green;">उत्पाद सामग्री:</h6> Thiamethoxam 25% WG<br><h6 style="color: green;">क्रियाविधि:</h6> प्रणालीगत, संपर्क, और ट्रांसलेमिनर<br><h6 style="color: green;">कीट नियंत्रण:</h6> स्टेम बोरर, गॉल मिज, पत्ते मोड़ने वाला, WBPH, BPH, GLH, थ्रिप्स, जेसिड, एफिड, व्हाइटफ्लाई, जेसिड, एफिड, स्कायला<br><h6 style="color: green;">कृषि फसलें:</h6> चावल, कपास, भिंडी, आम, गेहूँ, सरसों, टमाटर, बैंगन, आलू, नींबू, जीरा<br><h6 style="color: green;">कंपनी का नाम:</h6> धनुका एग्रीटेक लिमिटेड<br><h6 style="color: green;">उपयोग की दर:</h6> 0.5 ग्राम/लीटर।<br>8 ग्राम/पंप (15-लीटर पंप)<br>80 ग्राम/एकड़ छिड़काव के लिए।',
    image: 'images/Dhanuka Areva.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹368'
},
'Syngenta Alika': {
    description: '<h6 style="color: green;">उत्पाद का नाम:</h6> Alika कीटनाशक<br><h6 style="color: green;">उत्पाद सामग्री:</h6> Thiamethoxam 12.6% & Lambda-Cyhalothrin 9.5% ZC<br><h6 style="color: green;">क्रियाविधि:</h6> प्रणालीगत, संपर्क, और पेट<br><h6 style="color: green;">कीट नियंत्रण:</h6> जेसिड, एफिड, थ्रिप्स, बॉलवॉर्म, व्हाइटफ्लाई, फल बोरर, स्टेम फ्लाई, सेमी-लूपर, गिर्दल बीटल, पत्ते खाने वाला कैटरपिलर, शूट फ्लाई, स्टेम बोरर, चाय की बग<br><h6 style="color: green;">कृषि फसलें:</h6> कपास, टमाटर, मिर्च, सोयाबीन, मूँगफली, मकई, चाय<br><h6 style="color: green;">कंपनी का नाम:</h6> सिंजेंटा<br><h6 style="color: green;">उपयोग की दर:</h6> 0.5 मिली/लीटर।<br>8 मिली/पंप (15-लीटर पंप)<br>80 मिली/एकड़ छिड़काव के लिए।',
    image: 'images/Syngenta Alika.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹194'
},
'Dhanuka Fax': {
    description: '<h6 style="color: orange;">उत्पाद का नाम:</h6> Fax कीटनाशक<br><h6 style="color: orange;">उत्पाद सामग्री:</h6> Fipronil 5% SC<br><h6 style="color: orange;">क्रियाविधि:</h6> प्रणालीगत, संपर्क, और पेट<br><h6 style="color: orange;">कीट नियंत्रण:</h6> स्टेम बोरर, ब्राउन प्लान्थॉपर, ग्रीन लीफहॉपर, डायमंडबैक मथ, थ्रिप्स, एफिड, फल बोरर, प्रारंभिक शूट बोरर, रूट बोरर, एफिड, जेसिड, गुलाबी कैटरपिलर<br><h6 style="color: orange;">कृषि फसलें:</h6> चावल, गोभी, मिर्च, गन्ना, कपास, और अन्य फसलें<br><h6 style="color: orange;">कंपनी का नाम:</h6> धनुका एग्रीटेक लिमिटेड<br><h6 style="color: orange;">उपयोग की दर:</h6> 2 मिली/लीटर।<br>30 मिली/पंप (15-लीटर पंप)<br>300 मिली/एकड़ छिड़काव के लिए।',
    image: 'images/Dhanuka Fax.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹165'
},
'Iffco': {
    description: '<h6 style="color: teal;">संगठन का नाम:</h6> भारतीय किसान उर्वरक सहकारी लिमिटेड (IFFCO)<br><h6 style="color: teal;">स्थापना:</h6> 1967<br><h6 style="color: teal;">प्राथमिक उत्पाद:</h6> यूरिया, डाइ-एमोनियम फॉस्फेट (DAP), NPK जटिल, जस्ता उर्वरक, नैनो यूरिया<br><h6 style="color: teal;">विशेष उत्पाद:</h6> IFFCO नैनो यूरिया<br><h6 style="color: teal;">मुख्य फसलें समर्थित:</h6> गेहूँ, चावल, गन्ना, कपास, मक्का, फल, और सब्जियाँ<br><h6 style="color: teal;">मुख्य व्यावसायिक मॉडल:</h6> किसानों को शेयरधारकों के रूप में शामिल करते हुए सहकारी समाज<br><h6 style="color: teal;">मुख्य पहल:</h6> मिट्टी की सेहत में सुधार, किसान शिक्षा कार्यक्रम, सतत प्रथाएँ, नवीकरणीय ऊर्जा परियोजनाएँ<br><h6 style="color: teal;">डिजिटल प्लेटफ़ॉर्म:</h6> IFFCO किसान मोबाइल ऐप (मौसम अपडेट, खेती के टिप्स, बाजार की कीमतें प्रदान करता है)<br><h6 style="color: teal;">दृष्टि:</h6> किसानों को सशक्त बनाना, कृषि में आत्मनिर्भरता प्राप्त करना, पर्यावरण के अनुकूल खेती को बढ़ावा देना<br>',
    image: 'images/Iffco.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹225'
},
'Iffco-mc': {
    description: '<h6 style="color: teal;">संगठन का नाम:</h6> IFFCO-MC क्रॉप साइंस प्रा. लिमिटेड<br><h6 style="color: teal;">स्थापना:</h6> 2015 (IFFCO और मित्सुबिशी कॉर्पोरेशन के बीच संयुक्त उद्यम)<br><h6 style="color: teal;">प्राथमिक उत्पाद:</h6> फसल संरक्षण उत्पाद, विशेष पोषक तत्व, पौधों की वृद्धि के नियामक, जैव-उत्तेजक<br><h6 style="color: teal;">विशेष उत्पाद:</h6> SULPHOMAX (तरल सल्फर आधारित उर्वरक)<br><h6 style="color: teal;">मुख्य फसलें समर्थित:</h6> फल, सब्जियाँ, चावल, गेहूँ, कपास, दालें<br><h6 style="color: teal;">मुख्य व्यावसायिक मॉडल:</h6> भारतीय किसानों के लिए फसल संरक्षण और विशेष पोषक तत्वों पर ध्यान केंद्रित करना<br><h6 style="color: teal;">मुख्य पहल:</h6> सतत फसल संरक्षण, पर्यावरण के अनुकूल समाधान, उन्नत पोषक प्रबंधन<br><h6 style="color: teal;">डिजिटल प्लेटफ़ॉर्म:</h6> एन/ए<br><h6 style="color: teal;">दृष्टि:</h6> फसल उत्पादकता में सुधार करना, सतत कृषि को बढ़ावा देना, किसानों के लिए नवीन समाधान प्रदान करना<br>',
    image: 'images/Iffco-mc.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹225'
},
'Iffco azotobacter': {
    description: '<h6 style="color: teal;">उत्पाद का नाम:</h6> IFFCO Azotobacter<br><h6 style="color: teal;">उत्पाद सामग्री:</h6> नाइट्रोजन-फिक्सिंग बैक्टीरिया (Azotobacter)<br><h6 style="color: teal;">क्रियाविधि:</h6> वायुमंडलीय नाइट्रोजन को पौधों द्वारा उपयोगी रूप में परिवर्तित करता है, मिट्टी में नाइट्रोजन की उपलब्धता बढ़ाता है<br><h6 style="color: teal;">कीट नियंत्रण:</h6> एन/ए (यह कीटनाशक नहीं है, बल्कि एक जैव-उर्वरक है)<br><h6 style="color: teal;">कृषि फसलें:</h6> अनाज, सब्जियाँ, दालें, तिलहन, और फल फसलों के लिए उपयुक्त<br><h6 style="color: teal;">कंपनी का नाम:</h6> IFFCO<br><h6 style="color: teal;">उपयोग की दर:</h6> 2-3 किलोग्राम/एकड़<br>',
    image: 'images/Iffco azotobacter.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹135'
},
        'Calsiphos': {
    description: '<h6 style="color: teal;">उत्पाद का नाम:</h6> Calsiphos<br><h6 style="color: teal;">उत्पाद सामग्री:</h6> कैल्शियम और फॉस्फोरस शामिल है<br><h6 style="color: teal;">क्रियाविधि:</h6> पौधों की वृद्धि का समर्थन करने के लिए आवश्यक कैल्शियम और फॉस्फोरस पोषक तत्वों की आपूर्ति करता है<br><h6 style="color: teal;">कीट नियंत्रण:</h6> N/A (कीटनाशक नहीं, बल्कि पोषक तत्व सप्लीमेंट)<br><h6 style="color: teal;">कृषि फसलें:</h6> फलों, सब्जियों, अनाज, दलहन और अन्य फसलों के लिए उपयुक्त<br><h6 style="color: teal;">कंपनी का नाम:</h6> IFFCO<br><h6 style="color: teal;">उपयोग की दर:</h6> फसल की आवश्यकताओं और मिट्टी के विश्लेषण के आधार पर 50-100 किलोग्राम प्रति एकड़।',
    image: 'images/Calsiphos.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹100'
},
'Gypsum': {
    description: '<h6 style="color: teal;">उत्पाद का नाम:</h6> जिप्सम<br><h6 style="color: teal;">उत्पाद सामग्री:</h6> कैल्शियम सल्फेट शामिल है<br><h6 style="color: teal;">क्रियाविधि:</h6> मिट्टी की संरचना में सुधार करता है और पौधों की वृद्धि के लिए कैल्शियम और सल्फर प्रदान करता है<br><h6 style="color: teal;">कीट नियंत्रण:</h6> N/A (कीटनाशक नहीं, मिट्टी सुधार के लिए उपयोग किया जाता है)<br><h6 style="color: teal;">कृषि फसलें:</h6> अनाज, दलहन, फल और सब्जियों सहित विभिन्न प्रकार की फसलों के लिए उपयुक्त<br><h6 style="color: teal;">कंपनी का नाम:</h6> IFFCO<br><h6 style="color: teal;">उपयोग की दर:</h6> मिट्टी की स्थिति और फसल की आवश्यकताओं के आधार पर 100-200 किलोग्राम प्रति एकड़।',
    image: 'images/Gypsum.jpg',
    price: '<h5 style="color: olive;">कीमत:</h5> ₹100'
}

        
        
        // Add more products as needed
      };

      const details = productDetails[productName] || {
        description: 'Product details not found.',
        image: '',
        price: ''
      };

      sidebarContent.innerHTML = `
        <h2>${productName}</h2>
        <img src="${details.image}" alt="${productName}">
        <p>${details.description}</p>
        <p><strong>Price:</strong> ${details.price}</p>
      `;

      sidebar.style.width = '500px';
    }

    function closeSidebar() {
      const sidebar = document.getElementById('productSidebar');
      sidebar.style.width = '0';
    }

    // Close cart dropdown when clicking outside
    window.onclick = function(event) {
      const dropdown = document.getElementById('cartDropdown');
      const cartIcon = document.querySelector('.cart-icon');
      if (!cartIcon.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.style.display = 'none';
      }
    }

    /* Quantity Selector Buttons */
    function decreaseQuantity(productName) {
      const quantityInput = document.getElementById(`qty-${productName}`);
      let currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    }

    function increaseQuantity(productName) {
      const quantityInput = document.getElementById(`qty-${productName}`);
      let currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
    }
  </script>



<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .back-to-top:hover {
        transform: scale(1.2);
        color: #e67e22; /* Change color on hover */
    }
    a:hover {
        color: #e67e22; /* Change color on hover for links */
    }
    .social-icons a {
        color: #ecf0f1; /* Default color for social icons */
        font-size: 24px;
        margin: 0 10px;
        transition: color 0.3s;
    }
    .social-icons a:hover {
        color: red; /* Change color to red on hover */
    }
</style>

    <!-- Footer Section -->
    <footer style="background: linear-gradient(135deg, #2c3e50, #34495e); color: #ecf0f1; position: relative; overflow: hidden; padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo" style="font-size: 28px; font-weight: bold; margin: 0; animation: fadeIn 1s; color: #4CAF50;">
                        AGRICURE
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="social-icons" style="text-align: center;">
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.twitter.com" target="_blank">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/devkinandan-pandey-869482235/" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p style="text-align: center; margin: 0; animation: fadeIn 1s;">&copy; 2024 AGRICURE</p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12">
                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="color: #ecf0f1; font-size: 24px; transition: transform 0.3s;">
                        <i class="bi bi-arrow-up-short"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Add JS libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
