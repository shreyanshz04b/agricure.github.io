<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grains Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
               /* Global Styles */
            body {
            background-color: #eef2f3;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        /* Container Styling */
        .grain-container {
            position: relative;
            margin-bottom: 60px;
            padding: 30px;
            border-radius: 15px;
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
        }

        /* Fade-in Animation */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Speaker icon styling */
        .speaker-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 30px;
            color: #007bff;
            transition: color 0.3s;
        }

        .speaker-icon:hover {
            color: #0056b3;
        }

        /* Search bar styling */
        .search-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .search-container input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .search-container button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: green;
            color: white;
            margin-left: 5px;
            cursor: pointer;
        }

        .search-container button:hover {
            background-color: darkgreen;
        }

        /* Image styling */
        .grain-container img {
            width: 100%;
            height: 600px;
            border-radius: 8px;
        }

        /* Translate button styling */
        .translate-button {
            text-align: center;
            margin-top: 30px;
        }

        .translate-button button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: green;
        }

        .translate-button button a {
            text-decoration: none;
            color: white;
        }
        /* Button styling */
        button {
        background-color: #ff9800; /* Initial color */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    /* Hover effect */
    button:hover {
        background-color: #f44336; /* Hover color */
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Hover shadow */
    }

    /* Active button effect */
    button:active {
        background-color: #d32f2f;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
    }

         /* Side window styling */
    .side-window {
        position: fixed;
        right: 0;
        top: 0;
        width: 0; /* Initially closed */
        height: 100%;
        background: linear-gradient(to bottom, #E8DAEF, #A8D5BA, #F7E7CE);
        color: black;
        overflow-x: hidden;
        transition: 0.3s; /* Smooth transition */
        padding-top: 20px;
        border-left: 2px solid #ccc;
        z-index: 1000;
        border-radius: 8px;
    box-shadow: 0 0 0 4px #FFFFFF; 
    border: 2px solid #007BFF;
    }

    /* Side window content padding */
    .side-window-content {
        padding: 20px;
    }

    /* Close button styling */
    .side-window-close {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 25px;
        cursor: pointer;
        color: #ff5722; /* Initial color */
        transition: color 0.3s ease, transform 0.3s ease;
    }

    /* Hover effect for close button */
    .side-window-close:hover {
        color: #4caf50; /* Changes to green on hover */
        transform: rotate(90deg) scale(1.2); /* Rotate and enlarge */
    }

    /* Active effect for close button */
    .side-window-close:active {
        color: #d32f2f; /* Deep red on click */
    }
    </style>
</head>
<body>

<!-- Search Section -->
<nav style="display: flex; align-items: center; justify-content: space-between; background-color: #4CAF50; padding: 10px 20px;">

<p style="font-size: 32px; font-weight: bold; color: white;">Farming Crops</p>
        
<div class="search-container">
        <input type="text" id="searchInput" placeholder="Search for a grain...">
        <button onclick="searchGrain()">Search</button>
    </div>
</nav>

    <!-- Potato Section -->
    <div class="container grain-container" id="potato-section" data-grain="Potato">
        <h1 class="text-center">Potato</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/potato.jpg" alt="Potato Image">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'The potato is an important starchy root vegetable that originates from the Americas and plays a vital role as a staple food for many cultures around the world. Botanically classified as a tuber of the plant Solanum tuberosum, the potato belongs to the nightshade family, Solanaceae, which also includes tomatoes and eggplants. This versatile vegetable has adapted to various climates, with wild species found ranging from the southern United States all the way down to southern Chile, showcasing its diverse genetic heritage. Potatoes have become integral to global diets, being utilized in countless culinary traditions and dishes.');" 
               aria-label="Toggle speech for Rice section"></i>
        </div>
        <p>The potato is an important starchy root vegetable that originates from the Americas and plays a vital role as a staple food for many cultures around the world. Botanically classified as a tuber of the plant Solanum tuberosum, the potato belongs to the nightshade family, Solanaceae, which also includes tomatoes and eggplants. This versatile vegetable has adapted to various climates, with wild species found ranging from the southern United States all the way down to southern Chile, showcasing its diverse genetic heritage. Potatoes have become integral to global diets, being utilized in countless culinary traditions and dishes.</p>
        <button onclick="openSideWindow('potato')">Details</button>
    </div>
    <!-- Rice Section -->
    <div class="container grain-container" id="rice-section" data-grain="Rice">
        <h1 class="text-center">RICE</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/rice.webp" alt="Rice Image">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Rice is a staple food for billions of people, especially in Asia, where it plays a crucial role in daily diets and cultural traditions. It is derived from the Oryza sativa plant and comes in various types, including white, brown, jasmine, and basmati. Rich in carbohydrates, rice serves as a significant energy source. Brown rice is more nutritious than white rice, as it retains its bran and germ, providing additional fiber and vitamins. Widely cultivated in flooded fields and terraces, rice is not only vital for food security but also a key player in global trade, with major producers like China and India.');" 
               aria-label="Toggle speech for Rice section"></i>
        </div>
        <p>Rice is a staple food for billions of people, especially in Asia, where it plays a crucial role in daily diets and cultural traditions. It is derived from the Oryza sativa plant and comes in various types, including white, brown, jasmine, and basmati. Rich in carbohydrates, rice serves as a significant energy source. Brown rice is more nutritious than white rice, as it retains its bran and germ, providing additional fiber and vitamins. Widely cultivated in flooded fields and terraces, rice is not only vital for food security but also a key player in global trade, with major producers like China and India.</p>
        <button onclick="openSideWindow('rice')">Details</button>
    </div>

    <!-- Wheat Section -->
    <div class="container grain-container" id="wheat-section" data-grain="Wheat">
        <h1 class="text-center">WHEAT</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/wheat.jpg" alt="Wheat Image">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Wheat is the main cereal crop in India. The total area under the crop is about 29.8 million hectares in the country. The production of wheat in the country has increased significantly from 75.81 million MT in 2006-07 to an all-time record high of 94.88 million MT in 2011-12. The productivity of wheat which was 2602 kg/hectare in 2004-05 has increased to 3140 kg/hectare in 2011-12. The major increase in the productivity of wheat has been observed in the states of Haryana, Punjab and Uttar Pradesh. Higher area coverage is reported from MP in recent years. Indian wheat is largely a soft/medium hard, medium protein, white bread wheat, somewhat similar to U.S. hard white wheat. Wheat grown in central and western India is typically hard, with high protein and high gluten content. India also produces around 1.0-1.2 million tons of durum wheat, mostly in the state of Madhya Pradesh. Most Indian durum is not marketed separately due to segregation problems in the market yards. However, some quantities are purchased by the private trade at a price premium, mainly for processing of higher value/branded products.');" 
               aria-label="Toggle speech for Wheat section"></i>
        </div>
        <p>Wheat is the main cereal crop in India. The total area under the crop is about 29.8 million hectares in the country. The production of wheat in the country has increased significantly from 75.81 million MT in 2006-07 to an all-time record high of 94.88 million MT in 2011-12. The productivity of wheat which was 2602 kg/hectare in 2004-05 has increased to 3140 kg/hectare in 2011-12. The major increase in the productivity of wheat has been observed in the states of Haryana, Punjab and Uttar Pradesh. Higher area coverage is reported from MP in recent years.Indian wheat is largely a soft/medium hard, medium protein, white bread wheat, somewhat similar to U.S. hard white wheat. Wheat grown in central and western India is typically hard, with high protein and high gluten content. India also produces around 1.0-1.2 million tons of durum wheat, mostly in the state of Madhya Pradesh. Most Indian durum is not marketed separately due to segregation problems in the market yards. However, some quantities are purchased by the private trade at a price premium, mainly for processing of higher value/branded products.</p>
        <button onclick="openSideWindow('wheat')">Details</button>
    </div>

    <!-- Barley Section -->
    <div class="container grain-container" id="barley-section" data-grain="Barley">
        <h1 class="text-center">BARLEY</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/barley.jpg" alt="Barley Image" width="100%" height="auto">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Barley, Hordeum vulgare, is a cereal plant of the grass family Poaceae and its edible grain. Grown in a variety of environments, barley is the fourth largest grain crop globally, after wheat, rice, and corn. Barley is commonly used in breads, soups, stews, and health products, though it is primarily grown as animal fodder and as a source of malt for alcoholic beverages, especially beer. Hordeum vulgare is an annual grass featuring erect stems with few, alternate leaves. Barley comes in two varieties, distinguished by the number of rows of flowers on its flower spike. Six-row barley has its spike notched on opposite sides, with three spikelets at each notch, each containing a small individual flower, or floret, that develops a kernel. Two-row barley has central florets that produce kernels and lateral florets that are normally sterile. Whereas six-row barley has a higher protein content and is more suited for animal feed, two-row barley has a higher sugar content and is thus more commonly used for malt production.');" 
               aria-label="Toggle speech for Barley section"></i>
        </div>
        <p>Barley, (Hordeum vulgare), cereal plant of the grass family Poaceae and its edible grain. Grown in a variety of environments, barley is the fourth largest grain crop globally, after wheat, rice, and corn. Barley is commonly used in breads, soups, stews, and health products, though it is primarily grown as animal fodder and as a source of malt for alcoholic beverages, especially beer.</p>
        <p>Hordeum vulgare is an annual grass featuring erect stems with few, alternate leaves. Barley comes in two varieties, distinguished by the number of rows of flowers on its flower spike. Six-row barley has its spike notched on opposite sides, with three spikelets at each notch, each containing a small individual flower, or floret, that develops a kernel. Two-row barley has central florets that produce kernels and lateral florets that are normally sterile. Whereas six-row barley has a higher protein content and is more suited for animal feed, two-row barley has a higher sugar content and is thus more commonly used for malt production.</p>
        <button onclick="openSideWindow('barley')">Details</button>
    </div>
    <!-- Sugarcane Section -->
    <div class="container grain-container" id="sugarcane-section" data-grain="Sugarcane">
        <h1 class="text-center">Sugarcane</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/sugarcane.webp" alt="Sugarcane Image" width="100%" height="auto">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Uttar Pradesh stands out as one of India foremost sugarcane-producing states, significantly contributing to the nation overall sugar output. The region favorable climate, characterized by abundant sunlight and fertile alluvial soil, creates ideal conditions for robust sugarcane cultivation. Primarily grown in districts such as Bijnor, Meerut, and Saharanpur, sugarcane farming is integral to the livelihoods of millions of farmers in these areas. The harvest season typically spans from October to March, during which farmers employ a mix of traditional and modern agricultural practices to optimize their yields and enhance productivity.');" 
               aria-label="Toggle speech for Barley section"></i>
        </div>
        <p>Uttar Pradesh stands out as one of India's foremost sugarcane-producing states, significantly contributing to the nation's overall sugar output. The region's favorable climate, characterized by abundant sunlight and fertile alluvial soil, creates ideal conditions for robust sugarcane cultivation. Primarily grown in districts such as Bijnor, Meerut, and Saharanpur, sugarcane farming is integral to the livelihoods of millions of farmers in these areas. The harvest season typically spans from October to March, during which farmers employ a mix of traditional and modern agricultural practices to optimize their yields and enhance productivity. </p>
        <button onclick="openSideWindow('sugarcane')">Details</button>
      </div>
    <!-- PEA Section -->
    <div class="container grain-container" id="pea-section" data-grain="Pea">
        <h1 class="text-center">PEA</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/pea.webp" alt="Pea Image" width="100%" height="auto">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'The pea is a type of crop that can be classified as a pulse, a vegetable, or fodder for animals. Although the term pea generally refers to the seed of the plant, it can also refer to the pod that contains the seeds. The scientific name for the pea species was given by Carl Linnaeus in 1753, and it is called Pisum sativum. Some sources suggest that it should be classified as Lathyrus oleraceus instead, but this change is debated among experts.');" 
               aria-label="Toggle speech for Barley section"></i>
        </div>
        <p>The pea is a type of crop that can be classified as a pulse, a vegetable, or fodder for animals. Although the term "pea" generally refers to the seed of the plant, it can also refer to the pod that contains the seeds. The scientific name for the pea species was given by Carl Linnaeus in 1753, and it is called Pisum sativum. Some sources suggest that it should be classified as Lathyrus oleraceus instead, but this change is debated among experts.</p>
        <button onclick="openSideWindow('pea')">Details</button>
        
    </div>
    <!-- Mustard Section -->
    <div class="container grain-container" id="mustard-section" data-grain="Mustard" >
        <h1 class="text-center">Mustard</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/mustard.webp" alt="Mustard Image" width="100%" height="auto">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Mustard is a sauce made from mustard plant seeds. These seeds can be whole, ground, cracked, or bruised. They are blended with liquids like water, vinegar, lemon juice, or wine, plus salt and sometimes other flavors, to produce a paste or sauce. The color of mustard can vary from bright yellow to dark brown.');" 
               aria-label="Toggle speech for Barley section"></i>
        </div>
        <p>Mustard is a sauce made from mustard plant seeds. These seeds can be whole, ground, cracked, or bruised. They are blended with liquids like water, vinegar, lemon juice, or wine, plus salt and sometimes other flavors, to produce a paste or sauce. The color of mustard can vary from bright yellow to dark brown.</p>
        <button onclick="openSideWindow('mustard')">Details</button>
    </div>
    <!-- Millet Section -->
    <div class="container grain-container" id="millet-section" data-grain="Millet" >
        <h1 class="text-center">MILLET</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/millet.webp" alt="Millet Image" width="100%" height="auto">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Millets are a diverse group of cereal grains that include varieties such as Sorghum (jowar), Pearl millet (bajra), Finger Millet (ragi), Barnyard Millet, Proso Millet, Kodo Millet, Buckwheat, Amaranthus, and Foxtail Millet. These grains are celebrated as nutritious cereals due to their rich content of essential nutrients, making them an important dietary staple for millions of Indians. They are known for their high levels of vitamins, minerals, and dietary fiber, which contribute to better health and can help address malnutrition. Each type of millet has unique culinary uses and health benefits, underscoring their significance in traditional Indian cuisine and promoting sustainable agricultural practices. Overall, millets play a vital role in both nutrition and food security, highlighting their importance in the Indian diet.');" 
               aria-label="Toggle speech for Barley section"></i>
        </div>
        <p>Millets are a diverse group of cereal grains that include varieties such as Sorghum (jowar), Pearl millet (bajra), Finger Millet (ragi), Barnyard Millet, Proso Millet, Kodo Millet, Buckwheat, Amaranthus, and Foxtail Millet. These grains are celebrated as "nutritious cereals" due to their rich content of essential nutrients, making them an important dietary staple for millions of Indians. They are known for their high levels of vitamins, minerals, and dietary fiber, which contribute to better health and can help address malnutrition. Each type of millet has unique culinary uses and health benefits, underscoring their significance in traditional Indian cuisine and promoting sustainable agricultural practices. Overall, millets play a vital role in both nutrition and food security, highlighting their importance in the Indian diet.</p>
        <button onclick="openSideWindow('millet')">Details</button>
        
    </div>
    <!-- Ladyfinger Section -->
    <div class="container grain-container" id="ladyfinger-section" data-grain="Ladyfinger" >
        <h1 class="text-center">LADYFINGER</h1>
        <div class="image-container" style="position:relative;">
            <img src="images/ladyfinger.jpg" alt="Ladyfinger Image" width="100%" height="auto">
            <i class="bi bi-volume-up-fill speaker-icon" 
               onclick="toggleSpeak(this, 'Ladyfinger, or okra, is a plant that comes from East Africa. It known for being healthy because its full of vitamin C, which can help with skin issues, and it has a lot of fiber that helps clean out the body. Okra is also packed with important minerals like calcium, phosphorus, and magnesium, which are good for strong bones and healthy joints.');" 
               aria-label="Toggle speech for Barley section"></i>
        </div>
        <p>Ladyfinger, or okra, is a plant that comes from East Africa. It's known for being healthy because it's full of vitamin C, which can help with skin issues, and it has a lot of fiber that helps clean out the body. Okra is also packed with important minerals like calcium, phosphorus, and magnesium, which are good for strong bones and healthy joints.</p>
        <button onclick="openSideWindow('ladyfinger')">Details</button>
    </div>

<!-- Side Window for details -->
<div id="side-window" class="side-window">
    <span class="side-window-close" onclick="closeSideWindow()">&times;</span>
    <div id="side-window-content" class="side-window-content">
        <!-- Dynamic content will be loaded here -->
    </div>
</div>

<script>
// Function to open the side window with item details
        function openSideWindow(item) {
            const sideWindow = document.getElementById("side-window");
            const content = document.getElementById("side-window-content");
            if (item === 'potato') {
    content.innerHTML = `<h5>1. Which soil is suitable for potato cultivation?</h5>
Potato cultivation is considered most suitable in well-drained sandy or loamy soil. The soil's pH level should be between 5.0 and 7.0. It should also have a good amount of organic matter.

<h5>2. What season is most suitable for potatoes?</h5>
Cool and dry weather is best for potato cultivation. Generally, potatoes are sown between October and November, and the harvest occurs between March and April.

<h5>3. What fertilizer should be used for safe cultivation?</h5>
High-quality fertilizers, such as compost or humus, should be used for potato cultivation. Additionally, a balanced ratio of nitrogen, phosphorus, and potassium (NPK) is beneficial. Specifically, 30-50 kilograms of nitrogen, 25-30 kilograms of phosphorus, and 20-25 kilograms of potassium per hectare is recommended.

<h5>4. How much water should be given and when?</h5>
Potatoes should be watered at 5-7 day intervals during the first month. In the second month, watering should be done every 8-10 days. In the third month, as the crop begins to grow, watering every 10-12 days is sufficient. Overall, potato crops require about 400-500 mm of water.

<h5>5. What seed is suitable for potatoes?</h5>
High-quality seeds should be selected for potatoes. For good yields, varieties like "Kufri Jyoti," "Kufri Chandramukhi," and "Kufri Pukhraj" are considered suitable. These seeds are resistant to diseases and yield high production.

<h5>6. What was the farmer's profit from potatoes last year?</h5>
Last year, potato prices were good, allowing farmers to earn an average profit of ₹30,000 to ₹50,000 per hectare. Along with potato cultivation, improved agricultural techniques and proper management have increased farmers' incomes.

<h5>7. What is the right time for sowing potatoes?</h5>
The right time for sowing potatoes plays a crucial role in crop production. Generally, potatoes are sown between the end of October and mid-November. If a summer crop is desired, sowing can also be done in February.

<h5>8. Disease and pest management in potato crops.</h5>
Potato crops are typically susceptible to various diseases and pests, such as:

Diseases: Yellowing of potato leaves, blight, and phytophthora.
Pests: Potato tuber moth, cutworms, and aphids. To avoid these, crop rotation, using healthy seeds, and proper use of pesticides are necessary.

<h5>9. Harvesting potato crops.</h5>
Potato crops should be harvested when the leaves begin to dry and the stems turn yellow. Generally, this occurs 70-90 days after planting when the potatoes are of good size.

<h5>10. Storage methods for potatoes.</h5>
To keep potatoes safe for a long time, they should be stored in a cool, dark, and dry place. During storage, the temperature should be between 4-10 degrees Celsius. This slows down the processes of sprouting and rot.

<h5>11. Marketing and sales.</h5>
Creating a proper marketing strategy for potato crops is also important. Farmers should try to sell their crops through local markets, cooperatives, and online platforms.

<h5>12. Irrigation methods.</h5>
The right irrigation system should be selected for potato crops. Using a drip irrigation system saves water and promotes crop growth.

<h5>13. Balanced fertilizer management.</h5>
Balanced fertilizer management improves both the quality and yield of potatoes. Farmers should use natural fertilizers, such as cow dung, and chemical fertilizers in the correct ratio.`;
}

else if (item === 'rice') {
    content.innerHTML = `
        <h2>Rice</h2>
        <p>Heavy, water-retaining soil is considered most suitable for rice cultivation. Primarily, black soil, sandy soil, and alluvial soil are good for rice cultivation. These soils hold water well and help rice plants develop their roots.</p>
        
        <h3>What season is most suitable for rice?</h3>
        <p>Warm and humid weather is best for rice cultivation. In India, rice is sown during the kharif season (July to October). The temperature should be between 25-35 degrees Celsius.</p>

        <h3>What fertilizer should be used for safe cultivation?</h3>
        <p>Using balanced fertilizer is important for rice crops. Fertilizers like NPK (nitrogen, phosphorus, potassium) are used. Additionally, cow dung or green manure also helps in the growth of the crop.</p>

        <h3>How much water should be given and when?</h3>
        <p>Rice crops need irrigation every 7-10 days in summer.
        <ul>
            <li>July: 15 days after sowing</li>
            <li>August: 30 days after sowing</li>
            <li>September: 45 days after sowing</li>
            <li>October: 60 days after sowing</li>
        </ul></p>

        <h3>What seed is suitable for rice?</h3>
        <p>There are various varieties available for rice cultivation. Some popular varieties are: 
        <ul>
            <li>Basmati: Fragrant and long-grained rice.</li>
            <li>Indrani: A high-yielding variety.</li>
            <li>Sugandha: A medium-duration variety that is resistant to pests.</li>
        </ul></p>

        <h3>What was the profit for farmers from rice last year?</h3>
        <p>Last year, there was an increase in rice yield, allowing farmers to earn an average profit of ₹20,000 to ₹40,000 per acre. The increased market demand for rice provided farmers with a fair price.</p>

        <h3>What is the right time for sowing rice?</h3>
        <p>The right time for sowing rice plays a crucial role in crop production. Generally, rice is sown between June and July during the kharif season.</p>

        <h3>Disease and pest management in rice crops.</h3>
        <p>Rice crops can be affected by several diseases and pests, such as: 
        <ul>
            <li>Diseases: Rice blast disease, white fly.</li>
            <li>Pests: Basmati borer, stem borer.</li>
        </ul>
        To avoid these, regular monitoring, proper use of pesticides, and crop rotation should be practiced.</p>

        <h3>Harvesting rice crops.</h3>
        <p>Rice crops should be harvested when the plants' leaves begin to turn yellow and the grains start to dry. Generally, this occurs 120-150 days after sowing.</p>

        <h3>Storage methods for rice.</h3>
        <p>To keep rice safe for a long time, they should be stored in a cool and dry place. During storage, the temperature should be between 10-15 degrees Celsius.</p>

        <h3>Marketing and sales.</h3>
        <p>Creating a proper marketing strategy for rice crops is also important. Farmers should try to sell their crops through local markets, cooperatives, and online platforms.</p>

        <h3>Balanced fertilizer management.</h3>
        <p>Balanced fertilizer management improves both the quality and yield of rice. Farmers should use natural fertilizers, such as cow dung, and chemical fertilizers in the correct ratio.`;
}
else if (item === 'wheat') {
    content.innerHTML = `
        <h2 style="color: #DAA520;">Wheat</h2>
        <p style="color: #555;">Light, loamy soil is considered the most suitable for wheat cultivation. It can be well grown in brown, black, and sandy soils. These soils have good drainage capacity, which helps the root system of wheat to grow.</p>
        
        <h3 style="color: #DAA520;">What weather is most suitable for wheat?</h3>
        <p style="color: #555;">Cold and dry weather is most suitable for wheat cultivation. In India, wheat is sown during the Rabi season (October to March). The temperature should be between 10-25 degrees Celsius.</p>

        <h3 style="color: #DAA520;">What fertilizer should be used for safe farming?</h3>
        <p style="color: #555;">It is essential to use balanced fertilizer for wheat crops. Fertilizers such as NPK (Nitrogen, Phosphorus, Potash) are used. Additionally, the use of cow dung manure and green manure also aids in crop growth.</p>

        <h3 style="color: #DAA520;">How much water should be given after which month and days?</h3>
        <p style="color: #555;">It is essential to consider the weather and soil conditions when watering the wheat crop. 
        <ul>
            <li>November: 15 days after sowing</li>
            <li>December: 30 days after sowing</li>
            <li>January: 45 days after sowing</li>
            <li>February: 60 days after sowing</li>
        </ul></p>

        <h3 style="color: #DAA520;">Which seed is suitable for wheat?</h3>
        <p style="color: #555;">Various varieties are available for wheat cultivation. Some popular varieties are: 
        <ul>
            <li>PBW 343: A high-yielding variety.</li>
            <li>DBW 17: Resistant to diseases.</li>
            <li>Lok 1: Excellent quality and yield.</li>
        </ul></p>

        <h3 style="color: #DAA520;">Benefits of wheat for farmers in the previous year</h3>
        <p style="color: #555;">In the previous year, there was an increase in wheat yield, resulting in an average profit of ₹15,000 to ₹30,000 per acre for farmers. Due to the increased demand for wheat in the market, farmers received a fair price.</p>

        <h3 style="color: #DAA520;">Right time for sowing wheat</h3>
        <p style="color: #555;">The right time for sowing wheat plays a crucial role in crop production. Generally, wheat is sown between October and November during the Rabi season.</p>

        <h3 style="color: #DAA520;">Disease and pest management in wheat crops</h3>
        <p style="color: #555;">Several diseases and pests can affect wheat crops, such as: 
        <ul>
            <li>Diseases: Wheat white rust, spot disease.</li>
            <li>Pests: Wheat stem borer, brown bug.</li>
        </ul>
        To avoid these, regular monitoring, the appropriate use of pesticides, and crop rotation should be practiced.</p>

        <h3 style="color: #DAA520;">Harvesting wheat crops</h3>
        <p style="color: #555;">Wheat crops should be harvested when the leaves of the plants begin to yellow and the grains start to dry. Generally, this occurs 90-120 days after sowing.</p>

        <h3 style="color: #DAA520;">Storage methods for wheat</h3>
        <p style="color: #555;">To keep wheat safe for a long time, it should be stored in a cool and dry place. The temperature during storage should be between 10-15 degrees Celsius.</p>

        <h3 style="color: #DAA520;">Marketing and sales</h3>
        <p style="color: #555;">Creating a proper marketing strategy for the wheat crop is also essential. Farmers should try to sell their crops through local markets, cooperatives, and online platforms.</p>

        <h3 style="color: #DAA520;">Balanced fertilizer management</h3>
        <p style="color: #555;">Balanced fertilizer management improves both the quality and yield of wheat. Farmers should use natural fertilizers, such as cow dung, and chemical fertilizers in the right ratio.
    `;
}
else if (item === 'barley') {
    content.innerHTML = `
        <h2 style="color: #8B4513;">Barley</h2>
        <p style="color: #555;">Well-drained loamy soil is considered most suitable for barley cultivation. This soil should be rich in nitrogen and phosphorus to provide adequate nutrition for barley crops.</p>
        
        <h3 style="color: #8B4513;">When is the best season for barley?</h3>
        <p style="color: #555;">Cold weather is most suitable for barley cultivation. It is sown in the Rabi season (October to March), where the temperature should be between 10-25 degrees Celsius.</p>

        <h3 style="color: #8B4513;">What fertilizer should be used for safe cultivation?</h3>
        <p style="color: #555;">It is essential to use balanced fertilizers for barley crops. Fertilizers like nitrogen, phosphorus, and potash are necessary. Additionally, manure and green manure are beneficial for the crop.</p>

        <h3 style="color: #8B4513;">How much water should be given after how many months and days?</h3>
        <p style="color: #555;">Follow the following schedule for watering barley crops:
        <ul>
            <li>November: 10 days after sowing</li>
            <li>December: 25 days after sowing</li>
            <li>January: 40 days after sowing</li>
            <li>February: 55 days after sowing</li>
        </ul></p>

        <h3 style="color: #8B4513;">Which seed is suitable for barley?</h3>
        <p style="color: #555;">Several varieties are available for barley cultivation. Some popular varieties include:
        <ul>
            <li>Himalaya: A high-yielding variety.</li>
            <li>Barley 309: Resistant to diseases.</li>
            <li>Vicky: Excellent quality and yield.</li>
        </ul></p>

        <h3 style="color: #8B4513;">Last year's benefits from barley for farmers</h3>
        <p style="color: #555;">Last year, barley yield increased, providing farmers an average profit of ₹12,000 to ₹25,000 per acre. The rising demand for barley in the market led to fair prices.</p>

        <h3 style="color: #8B4513;">Right time for barley sowing</h3>
        <p style="color: #555;">The right time for sowing barley plays a crucial role in crop production. Generally, barley is sown between October and November in the Rabi season.</p>

        <h3 style="color: #8B4513;">Disease and pest management in barley crops</h3>
        <p style="color: #555;">Barley crops can be affected by several diseases and pests, such as:
        <ul>
            <li>Disease: Barley spot disease, powdery mildew.</li>
            <li>Pests: Barley stem borer, brown borer.</li>
        </ul>
        To prevent these, regular monitoring, proper pesticide use, and crop rotation should be practiced.</p>

        <h3 style="color: #8B4513;">Harvesting barley crops</h3>
        <p style="color: #555;">Barley crops should be harvested when the leaves of the plants start to turn yellow, and the grains begin to dry. Typically, this occurs 90-120 days after sowing.</p>

        <h3 style="color: #8B4513;">Storage methods for barley</h3>
        <p style="color: #555;">To store barley safely for a long time, keep it in a cool and dry place. The temperature during storage should be between 10-15 degrees Celsius.</p>

        <h3 style="color: #8B4513;">Marketing and sales</h3>
        <p style="color: #555;">Developing a proper marketing strategy for barley crops is also important. Farmers should try to sell their crops through local markets, cooperatives, and online platforms.</p>

        <h3 style="color: #8B4513;">Balanced fertilizer management</h3>
        <p style="color: #555;">Balanced fertilizer management improves both the quality and yield of barley. Farmers should use a proper ratio of organic fertilizers, such as manure, and chemical fertilizers.</p>
    `;
}
else if (item === 'sugarcane') {
    content.innerHTML = `
        <h2 style="color: #8B4513;">Sugarcane</h2>
        <p style="color: #555;">Heavy, deep, and well-drained soil is considered most suitable for sugarcane cultivation. Sandy loam and black soil are also regarded as good for sugarcane crops.</p>

        <h3 style="color: #8B4513;">When is the best season for sugarcane?</h3>
        <p style="color: #555;">The rainy season (June to September) is most suitable for sugarcane cultivation. It is generally sown in the summer season, where the temperature should be between 20-30 degrees Celsius.</p>

        <h3 style="color: #8B4513;">What fertilizer should be used for safe cultivation?</h3>
        <p style="color: #555;">It is essential to use balanced fertilizers for sugarcane crops. It should be applied according to 150-200 kg of nitrogen, 60-80 kg of phosphorus, and 80-100 kg of potash per hectare. Manure also benefits the crop.</p>

        <h3 style="color: #8B4513;">How much water should be given after how many months and days?</h3>
        <p style="color: #555;">Follow the following schedule for watering sugarcane crops:
        <ul>
            <li>July: 10-15 days after sowing</li>
            <li>August: 30 days after sowing</li>
            <li>September: 45 days after sowing</li>
            <li>October: 60 days after sowing</li>
        </ul></p>

        <h3 style="color: #8B4513;">Which seed is suitable for sugarcane?</h3>
        <p style="color: #555;">Several varieties are available for sugarcane cultivation. Some popular varieties include:
        <ul>
            <li>Co 0238: A high-yielding variety.</li>
            <li>Sorghum 0118: Resistant to diseases.</li>
            <li>Co 94012: A variety with high sweetness.</li>
        </ul></p>

        <h3 style="color: #8B4513;">Last year's benefits from sugarcane for farmers</h3>
        <p style="color: #555;">Last year, sugarcane yield increased, providing farmers an average profit of ₹40,000 to ₹60,000 per hectare. The rising demand for sugarcane in the market led to fair prices.</p>

        <h3 style="color: #8B4513;">Right time for sugarcane sowing</h3>
        <p style="color: #555;">The right time for sowing sugarcane plays a crucial role in crop production. Generally, sugarcane is sown between October and November.</p>

        <h3 style="color: #8B4513;">Disease and pest management in sugarcane crops</h3>
        <p style="color: #555;">Sugarcane crops can be affected by several diseases and pests, such as:
        <ul>
            <li>Disease: Sugarcane bacterial disease, powdery mildew.</li>
            <li>Pests: Sugarcane stem borer, whitefly.</li>
        </ul>
        To prevent these, regular monitoring, proper pesticide use, and crop rotation should be practiced.</p>

        <h3 style="color: #8B4513;">Harvesting sugarcane crops</h3>
        <p style="color: #555;">Sugarcane crops should be harvested when the stems become hard and start turning yellow. Typically, this occurs 10-12 months after sowing.</p>

        <h3 style="color: #8B4513;">Storage methods for sugarcane</h3>
        <p style="color: #555;">To store sugarcane safely for a long time, keep it in a cool and dry place.</p>
    `;
}
else if (item === 'pea') {
    content.innerHTML = `
        <h2 style="color: #4CAF50;">Peas</h2>
        <p style="color: #555;">Good drainage and light soil are most suitable for pea cultivation. Sandy soil, loamy soil, and black soil are considered ideal for peas.</p>

        <h3 style="color: #4CAF50;">Best Season for Peas</h3>
        <p style="color: #555;">Peas grow in cold weather. They are usually sown in winter (November to February), where the temperature should be between 10-20 degrees Celsius.</p>

        <h3 style="color: #4CAF50;">Recommended Fertilizers for Safe Cultivation</h3>
        <p style="color: #555;">A balanced fertilizer is essential for peas. Use 20-30 kg of nitrogen and 40-60 kg of phosphorus per hectare.</p>

        <h3 style="color: #4CAF50;">Irrigation Schedule After Sowing</h3>
        <p style="color: #555;">Follow this irrigation schedule for pea crops:
        <ul>
            <li>5-7 days after sowing: First irrigation</li>
            <li>15 days after sowing: Second irrigation</li>
            <li>30 days after sowing: Third irrigation (during flowering)</li>
        </ul></p>

        <h3 style="color: #4CAF50;">Recommended Seed Varieties for Peas</h3>
        <p style="color: #555;">Some popular varieties for pea cultivation are:
        <ul>
            <li>Pragati: High-yielding variety.</li>
            <li>Ajit: Resistant to diseases.</li>
            <li>Haritima: Tasty and nutritious.</li>
        </ul></p>

        <h3 style="color: #4CAF50;">Last Year's Benefits for Farmers from Peas</h3>
        <p style="color: #555;">Last year, there was an increase in pea yields, providing farmers with an average profit of ₹30,000 to ₹50,000 per hectare. The rising demand in the market resulted in fair prices.</p>

        <h3 style="color: #4CAF50;">Optimal Time for Sowing Peas</h3>
        <p style="color: #555;">The right time for sowing peas plays a significant role in crop production. Generally, peas are sown between October and November.</p>

        <h3 style="color: #4CAF50;">Disease and Pest Management in Pea Crops</h3>
        <p style="color: #555;">Pea crops can be affected by various diseases and pests, such as:
        <ul>
            <li>Disease: Pea mosaic virus, powdery mildew.</li>
            <li>Pests: Pea weevil, whitefly.</li>
        </ul>
        To prevent these, regular monitoring, appropriate pesticide use, and crop rotation should be practiced.</p>

        <h3 style="color: #4CAF50;">Harvesting Pea Crops</h3>
        <p style="color: #555;">Pea crops should be harvested when the pods are green and tender. Generally, this occurs 60-80 days after sowing.</p>

        <h3 style="color: #4CAF50;">Storage Methods for Peas</h3>
        <p style="color: #555;">To keep peas safe for an extended period, they should be stored in a cool, dry place. The storage temperature should be between 10-15 degrees Celsius.</p>

        <h3 style="color: #4CAF50;">Marketing and Sales</h3>
        <p style="color: #555;">Creating a suitable marketing strategy for pea crops is also crucial. Farmers should try to sell their crops through local markets and supermarkets.</p>

        <h3 style="color: #4CAF50;">Balanced Nutrient Management</h3>
        <p style="color: #555;">Balanced nutrient management improves both the quality and yield of peas. Farmers should use a proper ratio of organic fertilizers, such as cow dung, and chemical fertilizers.</p>
    `;
}
else if (item === 'mustard') {
    content.innerHTML = `
        <h2 style="color: #FF9800;">Mustard</h2>
        <p style="color: #555;">Good drainage soil is most suitable for mustard. Sandy and loamy soils are considered ideal for mustard cultivation.</p>

        <h3 style="color: #FF9800;">Best Season for Mustard</h3>
        <p style="color: #555;">Mustard grows in winter. It is usually sown between October and November, and it is harvested between February and March.</p>

        <h3 style="color: #FF9800;">Recommended Fertilizers for Safe Cultivation</h3>
        <p style="color: #555;">A balanced fertilizer is essential for mustard crops. Use 40-60 kg of nitrogen and 20-30 kg of phosphorus per hectare.</p>

        <h3 style="color: #FF9800;">Irrigation Schedule After Sowing</h3>
        <p style="color: #555;">Follow this irrigation schedule for mustard crops:
        <ul>
            <li>7-10 days after sowing: First irrigation</li>
            <li>20 days after sowing: Second irrigation</li>
            <li>30 days after sowing: Third irrigation (during flowering)</li>
        </ul></p>

        <h3 style="color: #FF9800;">Recommended Seed Varieties for Mustard</h3>
        <p style="color: #555;">Some popular varieties for mustard cultivation are:
        <ul>
            <li>Renuka: High-yielding variety.</li>
            <li>Suvarna: Resistant to diseases.</li>
            <li>Pandit: Early maturing and high yielding.</li>
        </ul></p>

        <h3 style="color: #FF9800;">Last Year's Benefits for Farmers from Mustard</h3>
        <p style="color: #555;">Last year, there was an increase in mustard yields, providing farmers with an average profit of ₹25,000 to ₹40,000 per hectare. The price of mustard increased in the market, resulting in fair prices.</p>

        <h3 style="color: #FF9800;">Optimal Time for Sowing Mustard</h3>
        <p style="color: #555;">The right time for sowing mustard plays a significant role in crop production. Generally, mustard is sown between October and November.</p>

        <h3 style="color: #FF9800;">Disease and Pest Management in Mustard Crops</h3>
        <p style="color: #555;">Mustard crops can be affected by various diseases and pests, such as:
        <ul>
            <li>Disease: White rust, leaf mosaic disease.</li>
            <li>Pests: Mustard caterpillar, aphid.</li>
        </ul>
        To prevent these, regular monitoring, appropriate pesticide use, and crop rotation should be practiced.</p>

        <h3 style="color: #FF9800;">Harvesting Mustard Crops</h3>
        <p style="color: #555;">Mustard crops should be harvested when the plants are yellow and dry. Generally, this occurs 90-120 days after sowing.</p>

        <h3 style="color: #FF9800;">Storage Methods for Mustard Seeds</h3>
        <p style="color: #555;">To keep mustard seeds safe for an extended period, they should be stored in a cool, dry place. The storage temperature should be between 10-15 degrees Celsius.</p>

        <h3 style="color: #FF9800;">Marketing and Sales</h3>
        <p style="color: #555;">Creating a suitable marketing strategy for mustard crops is also crucial. Farmers should try to sell their crops through local markets and supermarkets.</p>

        <h3 style="color: #FF9800;">Balanced Nutrient Management</h3>
        <p style="color: #555;">Balanced nutrient management improves both the quality and yield of mustard. Farmers should use a proper ratio of organic fertilizers, such as cow dung, and chemical fertilizers.</p>
    `;
}
else if (item === 'millet') {
    content.innerHTML = `
        <h2 style="color: #FF9800;">बाजरा</h2>
        <p style="color: #555;">बाजरा के लिए बलुई मिट्टी और दोमट मिट्टी सबसे उपयुक्त होती है। इसे अच्छे जल निकासी वाली मिट्टी में उगाना चाहिए।</p>

        <h3 style="color: #FF9800;">किस मौसम में बाजरा सबसे उपयुक्त है</h3>
        <p style="color: #555;">बाजरा की फसल मुख्यतः गर्मी में उगती है। इसे जून से जुलाई के बीच बोया जाता है और अगस्त से सितंबर में कटाई की जाती है।</p>

        <h3 style="color: #FF9800;">सुरक्षित खेती के लिए कौन-सी खाद का उपयोग करना चाहिए</h3>
        <p style="color: #555;">बाजरा के लिए संतुलित खाद का उपयोग करना आवश्यक है। प्रति हेक्टेयर 20-30 किलोग्राम नाइट्रोजन और 10-15 किलोग्राम फास्फोरस का उपयोग करना चाहिए।</p>

        <h3 style="color: #FF9800;">किस महीने और दिन बाद फसल को कितना पानी देना चाहिए</h3>
        <p style="color: #555;">बाजरा की फसल को पानी देने के लिए निम्नलिखित समय सारणी का पालन करें:
        <ul>
            <li>बुआई के बाद 10 दिन: पहले सिंचाई</li>
            <li>बुआई के बाद 20 दिन: दूसरी सिंचाई</li>
            <li>बुआई के बाद 30 दिन: तीसरी सिंचाई (फूल आने के समय)</li>
        </ul></p>

        <h3 style="color: #FF9800;">बाजरा के लिए कौन-सा बीज उपयुक्त है</h3>
        <p style="color: #555;">बाजरा की खेती के लिए कुछ लोकप्रिय किस्में हैं:
        <ul>
            <li>पूसा 862: उच्च उपज देने वाली किस्म।</li>
            <li>फॉक्स 12: जल्दी पकने वाली और अधिक प्रतिरोधी।</li>
            <li>गुड़ू बाजरा: स्थानीय क्षेत्रों में पसंद की जाने वाली किस्म।</li>
        </ul></p>

        <h3 style="color: #FF9800;">पिछले वर्ष किसानों को बाजरा से होने वाला लाभ</h3>
        <p style="color: #555;">पिछले वर्ष, बाजरा की उपज में वृद्धि हुई, जिससे किसानों को औसत रूप से ₹20,000 से ₹35,000 प्रति हेक्टेयर लाभ हुआ। बाजरा का बाजार मूल्य भी उचित रहा।</p>

        <h3 style="color: #FF9800;">बाजरा की बुआई के लिए सही समय</h3>
        <p style="color: #555;">बाजरा की बुआई का सही समय फसल के उत्पादन में महत्वपूर्ण भूमिका निभाता है। सामान्यतः, बाजरा की बुआई जून से जुलाई के बीच की जाती है।</p>

        <h3 style="color: #FF9800;">बाजरा की फसल में रोग और कीट प्रबंधन</h3>
        <p style="color: #555;">बाजरा की फसल में कई रोग और कीट लग सकते हैं, जैसे:
        <ul>
            <li>रोग: फफूंदी, पत्तों का मोज़ैक रोग।</li>
            <li>कीट: तिलचट्टा, लगड़ा कीट।</li>
        </ul>
        इनसे बचने के लिए, नियमित निगरानी, उचित कीटनाशक का उपयोग और फसल चक्रण करना चाहिए।</p>

        <h3 style="color: #FF9800;">बाजरा की फसल की कटाई</h3>
        <p style="color: #555;">बाजरा की फसल की कटाई तब करनी चाहिए जब पौधे पीले और सूखे हों। सामान्यतः, यह 90-100 दिन बाद होता है。</p>

        <h3 style="color: #FF9800;">बाजरा को भंडारण के तरीके</h3>
        <p style="color: #555;">बाजरा के बीज को लंबे समय तक सुरक्षित रखने के लिए, उन्हें ठंडी और सूखी जगह पर स्टोर करना चाहिए। भंडारण के दौरान तापमान 10-15 डिग्री सेल्सियस के बीच होना चाहिए।</p>

        <h3 style="color: #FF9800;">मार्केटिंग और बिक्री</h3>
        <p style="color: #555;">बाजरा की फसल के लिए उचित मार्केटिंग रणनीति बनाना भी महत्वपूर्ण है। किसानों को स्थानीय मंडियों और सुपरमार्केट्स के माध्यम से अपनी फसल बेचने की कोशिश करनी चाहिए।</p>

        <h3 style="color: #FF9800;">संतुलित खाद्य प्रबंधन</h3>
        <p style="color: #555;">संतुलित खाद्य प्रबंधन से बाजरा की गुणवत्ता और उपज दोनों में सुधार होता है। किसानों को प्राकृतिक खाद, जैसे गोबर की खाद, और रासायनिक खाद का सही अनुपात में उपयोग करना चाहिए।</p>
    `;
} else if (item === 'ladyfinger') {
    content.innerHTML = `
        <h2 style="color: #4CAF50;">भिंडी</h2>
        <p style="color: #555;">भिंडी के लिए बलुई मिट्टी और दोमट मिट्टी सबसे उपयुक्त होती है। इसे अच्छे जल निकासी वाली मिट्टी में उगाना चाहिए।</p>

        <h3 style="color: #4CAF50;">किस मौसम में भिंडी सबसे उपयुक्त है</h3>
        <p style="color: #555;">भिंडी की फसल गर्मियों में उगती है। इसे मार्च से अप्रैल के बीच बोया जाता है और जुलाई से अगस्त में कटाई की जाती है।</p>

        <h3 style="color: #4CAF50;">सुरक्षित खेती के लिए कौन-सी खाद का उपयोग करना चाहिए</h3>
        <p style="color: #555;">भिंडी के लिए संतुलित खाद का उपयोग करना आवश्यक है। प्रति हेक्टेयर 30-40 किलोग्राम नाइट्रोजन और 20-30 किलोग्राम फास्फोरस का उपयोग करना चाहिए।</p>

        <h3 style="color: #4CAF50;">किस महीने और दिन बाद फसल को कितना पानी देना चाहिए</h3>
        <p style="color: #555;">भिंडी की फसल को पानी देने के लिए निम्नलिखित समय सारणी का पालन करें:
        <ul>
            <li>बुआई के बाद 7 दिन: पहले सिंचाई</li>
            <li>बुआई के बाद 15 दिन: दूसरी सिंचाई</li>
            <li>बुआई के बाद 25 दिन: तीसरी सिंचाई (फूल आने के समय)</li>
        </ul></p>

        <h3 style="color: #4CAF50;">भिंडी के लिए कौन-सा बीज उपयुक्त है</h3>
        <p style="color: #555;">भिंडी की खेती के लिए कुछ लोकप्रिय किस्में हैं:
        <ul>
            <li>पूसा सदाबहार: उच्च उपज देने वाली किस्म।</li>
            <li>कृषि 201: जल्दी पकने वाली और अधिक प्रतिरोधी।</li>
            <li>अनंत: स्थानीय क्षेत्रों में पसंद की जाने वाली किस्म।</li>
        </ul></p>

        <h3 style="color: #4CAF50;">पिछले वर्ष किसानों को भिंडी से होने वाला लाभ</h3>
        <p style="color: #555;">पिछले वर्ष, भिंडी की उपज में वृद्धि हुई, जिससे किसानों को औसत रूप से ₹25,000 से ₹40,000 प्रति हेक्टेयर लाभ हुआ। भिंडी का बाजार मूल्य भी उचित रहा।</p>

        <h3 style="color: #4CAF50;">भिंडी की बुआई के लिए सही समय</h3>
        <p style="color: #555;">भिंडी की बुआई का सही समय फसल के उत्पादन में महत्वपूर्ण भूमिका निभाता है। सामान्यतः, भिंडी की बुआई मार्च से अप्रैल के बीच की जाती है।</p>

        <h3 style="color: #4CAF50;">भिंडी की फसल में रोग और कीट प्रबंधन</h3>
        <p style="color: #555;">भिंडी की फसल में कई रोग और कीट लग सकते हैं, जैसे:
        <ul>
            <li>रोग: बैक्टीरियल विल्ट, फफूंदी।</li>
            <li>कीट: तिलचट्टा, फाल्स मिलबग।</li>
        </ul>
        इनसे बचने के लिए, नियमित निगरानी, उचित कीटनाशक का उपयोग और फसल चक्रण करना चाहिए।</p>

        <h3 style="color: #4CAF50;">भिंडी की फसल की कटाई</h3>
        <p style="color: #555;">भिंडी की फसल की कटाई तब करनी चाहिए जब फल हरे और चमकीले हों। सामान्यतः, यह 50-60 दिन बाद होता है।</p>

        <h3 style="color: #4CAF50;">भिंडी को भंडारण के तरीके</h3>
        <p style="color: #555;">भिंडी के फल को लंबे समय तक सुरक्षित रखने के लिए, उन्हें ठंडी और सूखी जगह पर स्टोर करना चाहिए। भंडारण के दौरान तापमान 10-15 डिग्री सेल्सियस के बीच होना चाहिए।</p>

        <h3 style="color: #4CAF50;">मार्केटिंग और बिक्री</h3>
        <p style="color: #555;">भिंडी की फसल के लिए उचित मार्केटिंग रणनीति बनाना भी महत्वपूर्ण है। किसानों को स्थानीय मंडियों और सुपरमार्केट्स के माध्यम से अपनी फसल बेचने की कोशिश करनी चाहिए।</p>

        <h3 style="color: #4CAF50;">संतुलित खाद्य प्रबंधन</h3>
        <p style="color: #555;">संतुलित खाद्य प्रबंधन से भिंडी की गुणवत्ता और उपज दोनों में सुधार होता है। किसानों को प्राकृतिक खाद, जैसे गोबर की खाद, और रासायनिक खाद का सही अनुपात में उपयोग करना चाहिए।</p>
    `;
}
            // Open side window
            sideWindow.style.width = "700px";
        }

        // Function to close the side window
        function closeSideWindow() {
            document.getElementById("side-window").style.width = "0";
        }
    </script>

   <!-- JavaScript for Search Functionality -->
   <script>
        function searchGrain() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const grainContainers = document.querySelectorAll('.grain-container');

            grainContainers.forEach(container => {
                const grainName = container.getAttribute('data-grain').toLowerCase();
                if (grainName.includes(input)) {
                    container.style.display = 'block';
                } else {
                    container.style.display = 'none';
                }
            });
        }

        // Trigger search when pressing Enter
        document.getElementById('searchInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                searchGrain();
            }
        });
    </script>
    <!-- Translate to Hindi Button -->
    <div class="translate-button">
        <button>
            <a href="hindi.php">TRANSLATE TO HINDI</a>
        </button>
    </div>

    <!-- Bootstrap JS (Optional for additional features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Variables to keep track of the current speech and icon
        let currentSpeech = null;
        let currentIcon = null;

        /**
         * Toggles speech for the given text and icon.
         * @param {HTMLElement} iconElement - The speaker icon element that was clicked.
         * @param {string} text - The text to be spoken.
         */
        function toggleSpeak(iconElement, text) {
            // If speech is currently active
            if (currentSpeech && window.speechSynthesis.speaking) {
                // If the clicked icon is the same as the current one, stop speaking
                if (currentIcon === iconElement) {
                    window.speechSynthesis.cancel();
                    resetIcon(currentIcon);
                    currentSpeech = null;
                    currentIcon = null;
                    return;
                } else {
                    // If a different icon is clicked, stop the current speech and reset the previous icon
                    window.speechSynthesis.cancel();
                    resetIcon(currentIcon);
                }
            }

            // Create a new SpeechSynthesisUtterance instance with the provided text
            const speech = new SpeechSynthesisUtterance(text);
            speech.lang = 'en-US'; // Set language to US English

            // Start speaking
            window.speechSynthesis.speak(speech);

            // Update the current speech and icon
            currentSpeech = speech;
            currentIcon = iconElement;

            // Change the icon to a stop icon
            iconElement.classList.remove('bi-volume-up-fill');
            iconElement.classList.add('bi-x-circle-fill');

            // When speech ends naturally, reset the icon and clear the current speech and icon
            speech.onend = function() {
                resetIcon(iconElement);
                currentSpeech = null;
                currentIcon = null;
            };

            // Handle speech errors by resetting the icon and clearing the current speech and icon
            speech.onerror = function() {
                resetIcon(iconElement);
                currentSpeech = null;
                currentIcon = null;
            };
        }

        /**
         * Resets the speaker icon to its default state.
         * @param {HTMLElement} iconElement - The speaker icon element to reset.
         */
        function resetIcon(iconElement) {
            if (iconElement) {
                iconElement.classList.remove('bi-x-circle-fill');
                iconElement.classList.add('bi-volume-up-fill');
            }
        }

        /**
         * Optional: Handle the case when the user closes the browser or navigates away while speech is active.
         */
        window.onbeforeunload = function() {
            if (window.speechSynthesis.speaking) {
                window.speechSynthesis.cancel();
            }
        };
    </script>

</body>
</html>
