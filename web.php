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
                    AGRICURE
                </p></div>
    <div class="nav-right">
      <button class="filter-button">Filter</button>
      <div class="cart-icon" onclick="toggleCartDropdown()">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/shopping-cart.png" alt="Cart">
        <span id="cartBadge" class="cart-badge">0</span>
      </div>
      <div id="cartDropdown">
        <h4>Your Cart</h4>
        <div id="cartItems">
          <p>Your cart is empty.</p>
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
        <div class="card-title">N.P.K Fertilizer</div>
        <div class="card-description">
            N.P.K fertilizer boosts plant growth with nitrogen, phosphorus, and potassium, essential for healthy plants. Ideal for gardening.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹165
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('N.P.K Fertilizer')">-</button>
            <input type="number" id="qty-N.P.K Fertilizer" value="1" min="1">
            <button onclick="increaseQuantity('N.P.K Fertilizer')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('N.P.K Fertilizer')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('N.P.K Fertilizer')">Buy Now</button>
        </div>
        <div class="detail-link" onclick="openSidebar('N.P.K Fertilizer')">View Details</div>
    </div>
</div>

<!-- Card 2 -->
<div class="card">
    <img src="images/opulent.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">Zinc Sulfate</div>
        <div class="card-description">
            Timeless design with modern features. Perfect for any occasion.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹250 
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Zinc Sulfate')">-</button>
            <input type="number" id="qty-Zinc Sulfate" value="1" min="1">
            <button onclick="increaseQuantity('Zinc Sulfate')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Zinc Sulfate')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Zinc Sulfate')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Zinc Sulfate')">View Details</div>
    </div>
</div>
      

<!-- Card 3 -->
<div class="card">
    <img src="images/ferti2.jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">Muriate of Potash (MOP)</div>
        <div class="card-description">
            Lightweight and comfortable sneakers designed for everyday wear.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹330 
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Muriate of Potash')">-</button>
            <input type="number" id="qty-Muriate of Potash" value="1" min="1">
            <button onclick="increaseQuantity('Muriate of Potash')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Muriate of Potash')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Muriate of Potash')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Muriate of Potash')">View Details</div>
    </div>
</div>


<!-- Card 4 -->
<div class="card">
    <img src="images/dap.webp" alt="Product 4">
    <div class="card-content">
        <div class="card-title">Di-Ammonium Phosphate (DAP)</div>
        <div class="card-description">
            Illuminate your space with this sleek and energy-efficient lamp.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹730
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Di-Ammonium Phosphate')">-</button>
            <input type="number" id="qty-Di-Ammonium Phosphate" value="1" min="1">
            <button onclick="increaseQuantity('Di-Ammonium Phosphate')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Di-Ammonium Phosphate')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Di-Ammonium Phosphate')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Di-Ammonium Phosphate')">View Details</div>
    </div>
</div>


<!-- card 5-->
<div class="card">
    <img src="images/urea.webp" alt="Product 1">
    <div class="card-content">
        <div class="card-title">Nitrogen (N): Urea</div>
        <div class="card-description">
        Urea is a highly concentrated nitrogen fertilizer, containing about 46% nitrogen, which promotes rapid plant growth.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹561
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Urea')">-</button>
            <input type="number" id="qty-Urea" value="1" min="1">
            <button onclick="increaseQuantity('Urea')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Urea')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Urea')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Urea')">View Details</div>
    </div>
</div>

<!-- Card 6 -->
<div class="card">
    <img src="images/Dhanuka EM 1.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">Dhanuka EM 1 ( Emamectin Benzoate 5% SG ) Insecticide -</div>
        <div class="card-description">
        Bollworm/Pink bollworm, fruit and stem borer, diamondback moth, thrips, spider pod borer, and all other caterpillars.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹426
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Dhanuka EM 1')">-</button>
            <input type="number" id="qty-Dhanuka EM 1" value="1" min="1">
            <button onclick="increaseQuantity('Dhanuka EM 1')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Dhanuka EM 1')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Dhanuka EM 1')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Dhanuka EM 1')">View Details</div>
    </div>
</div>

<!-- Card 7 -->
<div class="card">
    <img src="images/FMC Coragen .jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">FMC Coragen (Chlorantraniliprole 18.5% SC)</div>
        <div class="card-description">
        Termite, early shoot borer and top borer, spotted bollworm, pink stem borer, fall armyworm, fruit borer, leaf folder, pod fly, leaf-eating caterpillar.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹380
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('FMC Coragen')">-</button>
            <input type="number" id="qty-FMC Coragen" value="1" min="1">
            <button onclick="increaseQuantity('FMC Coragen')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('FMC Coragen')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('FMC Coragen')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('FMC Coragen')">View Details</div>
    </div>
</div>

<!-- Card 8 -->
<div class="card">
    <img src="images/Dhanuka Areva.jpg" alt="Product 4">
    <div class="card-content">
        <div class="card-title">Areva (Thiamethoxam 25% WG) Insecticide -</div>
        <div class="card-description">
        Stem borer, gall midge, leaf folder, WBPH (white-backed planthopper), BPH (brown planthopper), GLH (green leafhopper),jassid, aphid, thrips, whitefly, jassid, aphid, psylla.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹368
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Dhanuka Areva')">-</button>
            <input type="number" id="qty-Dhanuka Areva" value="1" min="1">
            <button onclick="increaseQuantity('Dhanuka Areva')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Dhanuka Areva')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Dhanuka Areva')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Dhanuka Areva')">View Details</div>
    </div>
</div>


<!-- Card 9 -->
<div class="card">
    <img src="images/Syngenta Alika.jpg" alt="Product 1">
    <div class="card-content">
        <div class="card-title">Syngenta Alika Insecticide -</div>
        <div class="card-description">
        Jassid, aphid, thrips, bollworm, whitefly and fruit borer, stem fly, semilooper, girdle beetle, leaf hopper, leaf-eating caterpillar, shoot fly, stem borer, tea bug.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹194
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Syngenta Alika')">-</button>
            <input type="number" id="qty-Syngenta Alika" value="1" min="1">
            <button onclick="increaseQuantity('Syngenta Alika')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Syngenta Alika')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Syngenta Alika')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Syngenta Alika')">View Details</div>
    </div>
</div>


<!-- Card 10 -->
<div class="card">
    <img src="images/Dhanuka Fax.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">Dhanuka Fax (Fipronil 5% SC)</div>
        <div class="card-description">
        Stem borer, brown planthopper, green leaf hopper, diamondback moth, thrips, aphid, fruit borer, early shoot borer and root borer, aphid, jassid, pink bollworm.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹164
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Dhanuka Fax')">-</button>
            <input type="number" id="qty-Dhanuka Fax" value="1" min="1">
            <button onclick="increaseQuantity('Dhanuka Fax')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Dhanuka Fax')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Dhanuka Fax')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Dhanuka Fax')">View Details</div>
    </div>
</div>


<!-- Card 11 -->
<div class="card">
    <img src="images/Iffco.jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">Iffco</div>
        <div class="card-description">
        IFFCO's nitrogen-fixing bio-fertilizers are Rhizobium, Azotobacter, and Acetobacter. Phosphate Solubilising Bacteria (PSB)
        </div>
        <h5 style="color: olive;">Price:</h5> ₹225
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Iffco')">-</button>
            <input type="number" id="qty-Iffco" value="1" min="1">
            <button onclick="increaseQuantity('Iffco')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Iffco')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Iffco')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Iffco')">View Details</div>
    </div>
</div>


<!-- Card 12 -->
<div class="card">
    <img src="images/Iffco-mc.jpg" alt="Product 4">
    <div class="card-content">
        <div class="card-title">IFFCO-MC</div>
        <div class="card-description">
        IFFCO-MC Crop Science Private Limited (IFFCO-MC) offers a range of products and services for farmers, including insecticides, fungicides, and biofertilizers
        </div>
        <h5 style="color: olive;">Price:</h5> ₹290
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Iffco-mc')">-</button>
            <input type="number" id="qty-Iffco-mc" value="1" min="1">
            <button onclick="increaseQuantity('Iffco-mc')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Iffco-mc')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Iffco-mc')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Iffco-mc')">View Details</div>
    </div>
</div>

<!-- Card 13 -->
<div class="card">
    <img src="images/Iffco azotobacter.jpg" alt="Product 1">
    <div class="card-content">
        <div class="card-title">IFFCO Azotobacter</div>
        <div class="card-description">
        It is non symbiotic nitrogen fixing bacteria recommended for non leguminous crops like Paddy, Wheat, Millets, Cotton, Tomato, Cabbage, Mustard, Safflower
        </div>
        <h5 style="color: olive;">Price:</h5> ₹125
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Iffco azotobacter')">-</button>
            <input type="number" id="qty-Iffco azotobacter" value="1" min="1">
            <button onclick="increaseQuantity('Iffco azotobacter')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Iffco azotobacter')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Iffco azotobacter')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Iffco azotobacter')">View Details</div>
    </div>
</div>


<!-- Card 14 -->
<div class="card">
    <img src="images/Calsiphos.jpg" alt="Product 2">
    <div class="card-content">
        <div class="card-title">Calsiphos</div>
        <div class="card-description">
        Used in basal application in crops like Wheat, Paddy, Maize, Pulses, Sugarcane, Vegetables, Cotton 
        </div>
        <h5 style="color: olive;">Price:</h5> ₹100
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Calsiphos')">-</button>
            <input type="number" id="qty-Calsiphos" value="1" min="1">
            <button onclick="increaseQuantity('Calsiphos')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Calsiphos')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Calsiphos')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Calsiphos')">View Details</div>
    </div>
</div>

<!-- Card 15 -->
<div class="card">
    <img src="images/Gypsum.jpg" alt="Product 3">
    <div class="card-content">
        <div class="card-title">Gypsum</div>
        <div class="card-description">
        Gypsum has been particularly useful to peanut farmers and to some extent to watermelon farmers.
        </div>
        <h5 style="color: olive;">Price:</h5> ₹64
        <div class="quantity-selector">
            <button onclick="decreaseQuantity('Gypsum')">-</button>
            <input type="number" id="qty-Gypsum" value="1" min="1">
            <button onclick="increaseQuantity('Gypsum')">+</button>
        </div>
        <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Gypsum')">Add to Cart</button>
            <button class="buy-now" onclick="buyNow('Gypsum')">Buy Now</button> <!-- Updated to call buyNow -->
        </div>
        <div class="detail-link" onclick="openSidebar('Gypsum')">View Details</div>
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
          description: '<h6 style="color: olive;">Product Name:</h6> N.P.K Fertilizer<br><h6 style="color: olive;">Product Content:</h6> Typically contains 15-15-15 (N-P-K ratio) or other variations like 20-20-20.<br><h6 style="color: olive;">Mode of Action:</h6> Nutrient supply (provides essential macronutrients)<br><h6 style="color: olive;">Pest Control:</h6> N/A (not an insecticide)<br><h6 style="color: olive;">Crops Used In:</h6> Suitable for a variety of crops including fruits, vegetables, and grains.<br><h6 style="color: olive;">Company Name:</h6> [Your Company Name]<br><h6 style="color: olive;">Usage Rate:</h6> 100-200 kg/acre depending on the crop and soil condition.',
          image: 'images/npk.jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹165'
        },
        'Zinc Sulfate': {
          description: '<h6 style="color: teal;">Product Name:</h6> Zinc Sulfate<br><h6 style="color: teal;">Product Content:</h6> 21% Zinc (Zn)<br><h6 style="color: teal;">Mode of Action:</h6> Nutrient supply<br><h6 style="color: teal;">Pest Control:</h6> N/A (not an insecticide, but a micronutrient fertilizer)<br><h6 style="color: teal;">Crops Used In:</h6> Fruits, vegetables, grains, and other crops<br><h6 style="color: teal;">Company Name:</h6> [Your Company Name]<br><h6 style="color: teal;">Usage Rate:</h6> 25-50 kg/acre depending on the crop.',
          image: 'images/ferti1.webp',
          price: '<h5 style="color: olive;">Price:</h5> ₹250'
        },
        'Muriate of Potash': {
          description: '<h6 style="color: teal;">Product Name:</h6> Muriate of Potash<br><h6 style="color: teal;">Product Content:</h6> 60% Potassium Oxide (K₂O)<br><h6 style="color: teal;">Mode of Action:</h6> Nutrient supply<br><h6 style="color: teal;">Pest Control:</h6> N/A (not an insecticide, but a fertilizer)<br><h6 style="color: teal;">Crops Used In:</h6> Potatoes, tomatoes, fruits, vegetables, and other crops<br><h6 style="color: teal;">Company Name:</h6> [Your Company Name]<br><h6 style="color: teal;">Usage Rate:</h6> 50-150 kg/acre depending on the crop.',
          image: 'images/ferti2.jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹330'
        },
        'Di-Ammonium Phosphate': {
          description: '<h6 style="color: teal;">Product Name:</h6> Di-Ammonium Phosphate<br><h6 style="color: teal;">Product Content:</h6> 18% Nitrogen and 46% Phosphate<br><h6 style="color: teal;">Mode of Action:</h6> Nutrient supply<br><h6 style="color: teal;">Pest Control:</h6> N/A (not an insecticide, but a fertilizer)<br><h6 style="color: teal;">Crops Used In:</h6> Wheat, corn, soybeans, fruits, vegetables, and other crops<br><h6 style="color: teal;">Company Name:</h6> [Your Company Name]<br><h6 style="color: teal;">Usage Rate:</h6> 100-200 kg/acre depending on the crop.',
          image: 'images/dap.webp',
          price: '<h5 style="color: olive;">Price:</h5> ₹730'
        },
        'Urea': {
          description: '<h6 style="color: teal;">Product Name:</h6> Urea<br><h6 style="color: teal;">Product Content:</h6> 46% Nitrogen<br><h6 style="color: teal;">Mode of Action:</h6> Nutrient supply<br><h6 style="color: teal;">Pest Control:</h6> N/A (not an insecticide, but a fertilizer)<br><h6 style="color: teal;">Crops Used In:</h6> Wheat, corn, rice, cotton, and other crops<br><h6 style="color: teal;">Company Name:</h6> [Your Company Name]<br><h6 style="color: teal;">Usage Rate:</h6> 50-200 kg/acre depending on the crop.',
          image: 'images/urea.webp',
          price: '<h5 style="color: olive;">Price:</h5> ₹561'
        },
        'Dhanuka EM 1': {
          description: '<h6 style="color: green;">Product Name:</h6> EM1 Insecticide<br><h6 style="color: green;">Product Content:</h6> Emamectin Benzoate 5% SG<br><h6 style="color: green;">Company Name:</h6> Dhanuka Agritech Limited<br><h6 style="color: green;">Crops Used In:</h6> Cotton, Okra, Cabbage, Chili, Eggplant, Pigeon Pea, Grapes, Chickpeas, and other crops<br><h6 style="color: green;">Usage Rate:</h6> 0.5 grams/liter.<br>8 grams/pump (15-liter pump)<br>80 grams/acre for spraying.',
          image: 'images/Dhanuka EM 1.jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹426'
        },
        'FMC Coragen': {
          description: '<h6 style="color:green;">Product Name</h6>Korajan Insecticide <h6 style="color:green;">Product Content:</h6>Chlorantraniliprole 18.5% SC <br><h6 style="color:green;">Mode of Action:</h6>Systemic and Contact <br><h6 style="color:green;">Company Name:</h6>FMC <br><h6 style="color:green;">Pest Control:</h6>Termites, Early Shoot Borer and Top Borer, Diamondback Moth, Green Semilooper, Stem Fly and Girdle Beetle, American Bollworm, Spotted Bollworm, Tobacco Caterpillar, Stem Borer, Pink Stem Borer, Fall Armyworm, Fruit Borer, Leaf-Cutting Pod Fly, Leaf-Eating Caterpillar <br><h6 style="color:green;">Crops Used In:</h6>Sugarcane, Cabbage, Soybean, Cotton, Corn, Tomato, Groundnut, Chili, Chickpeas, Eggplant, Rice, Pigeon Pea, Bottle Gourd, and Okra <br><h6 style="color:green;">Usage Rate:</h6>0.4 ml/liter. <br>6 ml/pump (15-liter pump) <br>60 ml/acre for spraying.',
          image: 'images/FMC Coragen .jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹380'
        },
        'Dhanuka Areva': {
          description: '<h6 style="color: green;">Product Name:</h6> Areva Insecticide<br><h6 style="color: green;">Product Content:</h6> Thiamethoxam 25% WG<br><h6 style="color: green;">Mode of Action:</h6> Systemic, contact, and translaminar<br><h6 style="color: green;">Pest Control:</h6> Stem borer, gall midge, leaf folder, WBPH, BPH, GLH, thrips, jassid, aphid, whitefly, jassid, aphid, scylla<br><h6 style="color: green;">Crops Used In:</h6> Rice, cotton, okra, mango, wheat, mustard, tomato, eggplant, potato, lemon, cumin<br><h6 style="color: green;">Company Name:</h6> Dhanuka Agritech Limited<br><h6 style="color: green;">Usage Rate:</h6> 0.5 grams/liter.<br>8 grams/pump (15-liter pump)<br>80 grams/acre for spraying.',
          image: 'images/Dhanuka Areva.jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹368'
        },
        'Syngenta Alika': {
          description: '<h6 style="color: green;">Product Name:</h6> Alika Insecticide<br><h6 style="color: green;">Product Content:</h6> Thiamethoxam 12.6% & Lambda-Cyhalothrin 9.5% ZC<br><h6 style="color: green;">Mode of Action:</h6> Systemic, contact, and stomach<br><h6 style="color: green;">Pest Control:</h6> Jassid, aphid, thrips, bollworm, whitefly, fruit borer, stem fly, semi-looper, girdle beetle, leaf hopper, leaf-eating caterpillar, shoot fly, stem borer, tea bug<br><h6 style="color: green;">Crops Used In:</h6> Cotton, tomato, chili, soybean, peanut, corn, tea<br><h6 style="color: green;">Company Name:</h6> Syngenta<br><h6 style="color: green;">Usage Rate:</h6> 0.5 ml/liter.<br>8 ml/pump (15-liter pump)<br>80 ml/acre for spraying.',
          image: 'images/Syngenta Alika.jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹194'
        },
        'Dhanuka Fax': {
          description: '<h6 style="color: orange;">Product Name:</h6> Fax Insecticide<br><h6 style="color: orange;">Product Content:</h6> Fipronil 5% SC<br><h6 style="color: orange;">Mode of Action:</h6> Systemic, contact, and stomach<br><h6 style="color: orange;">Pest Control:</h6> Stem borer, brown planthopper, green leafhopper, diamondback moth, thrips, aphid, fruit borer, early shoot borer, root borer, aphid, jassid, pink caterpillar<br><h6 style="color: orange;">Crops Used In:</h6> Rice, cabbage, chili, sugarcane, cotton, and other crops<br><h6 style="color: orange;">Company Name:</h6> Dhanuka Agritech Limited<br><h6 style="color: orange;">Usage Rate:</h6> 2 ml/liter.<br>30 ml/pump (15-liter pump)<br>300 ml/acre for spraying.',          
          image: 'images/Dhanuka Fax.jpg',
          price: '<h5 style="color: olive;">Price:</h5> ₹165'
        },
        'Iffco': {
            description: '<h6 style="color: teal;">Organization Name:</h6> Indian Farmers Fertiliser Cooperative Limited (IFFCO)<br><h6 style="color: teal;">Founded:</h6> 1967<br><h6 style="color: teal;">Primary Products:</h6> Urea, Di-Ammonium Phosphate (DAP), NPK complexes, Zinc fertilizers, Nano Urea<br><h6 style="color: teal;">Specialty Product:</h6> IFFCO Nano Urea<br><h6 style="color: teal;">Main Crops Supported:</h6> Wheat, rice, sugarcane, cotton, maize, fruits, and vegetables<br><h6 style="color: teal;">Core Business Model:</h6> Cooperative society with farmers as stakeholders<br><h6 style="color: teal;">Key Initiatives:</h6> Soil health improvement, farmer education programs, sustainable practices, renewable energy projects<br><h6 style="color: teal;">Digital Platform:</h6> IFFCO Kisan mobile app (provides weather updates, farming tips, market prices)<br><h6 style="color: teal;">Vision:</h6> Empower farmers, achieve agricultural self-sufficiency, promote eco-friendly farming<br>',
            image: 'images/Iffco.jpg',
            price: '<h5 style="color: olive;">Price:</h5> ₹225'
        },
        'Iffco-mc': {
            description: '<h6 style="color: teal;">Organization Name:</h6> IFFCO-MC Crop Science Pvt. Ltd.<br><h6 style="color: teal;">Founded:</h6> 2015 (joint venture between IFFCO and Mitsubishi Corporation)<br><h6 style="color: teal;">Primary Products:</h6> Crop protection products, specialty nutrients, plant growth regulators, bio-stimulants<br><h6 style="color: teal;">Specialty Product:</h6> SULPHOMAX (liquid sulphur-based fertilizer)<br><h6 style="color: teal;">Main Crops Supported:</h6> Fruits, vegetables, rice, wheat, cotton, pulses<br><h6 style="color: teal;">Core Business Model:</h6> Focus on crop protection and specialty nutrients for Indian farmers<br><h6 style="color: teal;">Key Initiatives:</h6> Sustainable crop protection, eco-friendly solutions, advanced nutrient management<br><h6 style="color: teal;">Digital Platform:</h6> N/A<br><h6 style="color: teal;">Vision:</h6> Enhance crop productivity, promote sustainable agriculture, offer innovative solutions for farmers<br>',
            image: 'images/Iffco-mc.jpg',
            price: '<h5 style="color: olive;">Price:</h5> ₹225'
        },
        'Iffco azotobacter': {
            description:'<h6 style="color: teal;">Product Name:</h6> IFFCO Azotobacter<br><h6 style="color: teal;">Product Content:</h6> Nitrogen-fixing bacteria (Azotobacter)<br><h6 style="color: teal;">Mode of Action:</h6> Converts atmospheric nitrogen into a form usable by plants, enhancing nitrogen availability in the soil<br><h6 style="color: teal;">Pest Control:</h6> N/A (not a pesticide, but a bio-fertilizer)<br><h6 style="color: teal;">Crops Used In:</h6> Suitable for cereals, vegetables, pulses, oilseeds, and fruit crops<br><h6 style="color: teal;">Company Name:</h6> IFFCO<br><h6 style="color: teal;">Usage Rate:</h6> Apply 200 g or 500 ml per acre, depending on crop and soil conditions.',
            image: 'images/Iffco azotobacter.jpg',
            price: '<h5 style="color: olive;">Price:</h5> ₹125'
        },
        'Calsiphos':{
            description:'<h6 style="color: teal;">Product Name:</h6> Calsiphos<br><h6 style="color: teal;">Product Content:</h6> Contains calcium and phosphorus<br><h6 style="color: teal;">Mode of Action:</h6> Supplies essential calcium and phosphorus nutrients to support plant growth<br><h6 style="color: teal;">Pest Control:</h6> N/A (not a pesticide, but a nutrient supplement)<br><h6 style="color: teal;">Crops Used In:</h6> Suitable for fruits, vegetables, cereals, pulses, and other crops<br><h6 style="color: teal;">Company Name:</h6> IFFCO<br><h6 style="color: teal;">Usage Rate:</h6> 50-100 kg per acre, based on crop requirements and soil analysis.',
            image: 'images/Calsiphos.jpg',
            price: '<h5 style="color: olive;">Price:</h5> ₹100'
        },
        'Gypsum': {
            description: '<h6 style="color: teal;">Product Name:</h6> Gypsum<br><h6 style="color: teal;">Product Content:</h6> Contains calcium sulfate<br><h6 style="color: teal;">Mode of Action:</h6> Improves soil structure and provides calcium and sulfur for plant growth<br><h6 style="color: teal;">Pest Control:</h6> N/A (not a pesticide, used for soil amendment)<br><h6 style="color: teal;">Crops Used In:</h6> Suitable for a wide range of crops including cereals, pulses, fruits, and vegetables<br><h6 style="color: teal;">Company Name:</h6> IFFCO<br><h6 style="color: teal;">Usage Rate:</h6> 100-200 kg per acre, depending on soil condition and crop requirement.',
            image: 'images/Gypsum.jpg',
            price: '<h5 style="color: olive;">Price:</h5> ₹100'
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
