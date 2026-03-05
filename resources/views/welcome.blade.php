<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domsus Dei - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Source Sans Pro', sans-serif; }
        h1, h2, h3, .serif { font-family: 'Playfair Display', serif; }
        .vatican-gold { color: #c5a059; }
        .bg-vatican-gold { background-color: #c5a059; }
        .vatican-red { color: #800000; }
        .border-vatican { border-color: #c5a059; }
    </style>
</head>
<body class="bg-[#f4f1ea] text-[#2c2c2c]">

    <div class="bg-[#2c2c2c] text-white text-[10px] uppercase tracking-widest py-2 px-6 flex justify-between">
        <div>Roman Catholic Church of the Philippines</div>
        <div class="space-x-4">
            <span>English</span>
            <span>Tagalog</span>
            <span>Latin</span>
        </div>
    </div>

    <header class="bg-white border-b-4 border-vatican py-8 shadow-sm">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-5xl font-bold vatican-red tracking-tight">Domus Dei</h1>
            <p class="text-sm uppercase tracking-[0.3em] mt-2 vatican-gold font-bold">Philippines</p>
        </div>
    </header>

    <nav class="bg-white border-b border-gray-200">
        <ul class="flex justify-center space-x-8 py-3 text-xs uppercase font-bold tracking-wider text-gray-600">
            <li class="hover:vatican-red cursor-pointer">Parishes</li>
            <li class="hover:vatican-red cursor-pointer">Dioceses</li>
            <li class="hover:vatican-red cursor-pointer">Mass Times</li>
            <li class="hover:vatican-red cursor-pointer">Sacraments</li>
        </ul>
    </nav>

    <section class="max-w-4xl mx-auto mt-12 px-6">
        <div class="bg-white p-1 border border-gray-300 shadow-inner">
            <div class="border border-vatican p-8 text-center">
                <h2 class="text-2xl mb-6 italic">Search the Ecclesiastical Directory</h2>
                <div class="relative max-w-xl mx-auto">
                    <input type="text" placeholder="Search by Parish, City, or Patron Saint..." 
                           class="w-full border-b-2 border-vatican bg-transparent py-2 text-center text-xl outline-none focus:placeholder-transparent">
                    <button class="mt-4 bg-vatican-gold text-white px-8 py-2 uppercase text-xs font-bold tracking-widest hover:bg-[#b08d4a] transition">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </section>

    <main class="max-w-6xl mx-auto mt-16 px-6 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
            
            <div class="md:col-span-8">
                <h3 class="text-xs uppercase font-bold vatican-gold border-b border-vatican mb-6 pb-2">Featured Parish</h3>
                <div class="group cursor-pointer">
                    <div class="aspect-video bg-gray-200 overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1548625361-195fe5772323?q=80&w=1000" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                    </div>
                    <h2 class="text-3xl font-bold hover:vatican-red transition">Minor Basilica of the Immaculate Conception</h2>
                    <p class="mt-2 text-gray-600 leading-relaxed italic">The Metropolitan Cathedral-Basilica, situated in the heart of Intramuros, Manila, serves as the seat of the Archbishop of Manila...</p>
                </div>
            </div>

            <div class="md:col-span-4">
                <h3 class="text-xs uppercase font-bold vatican-gold border-b border-vatican mb-6 pb-2">Dioceses</h3>
                <ul class="space-y-4">
                    <li class="border-b border-gray-100 pb-2 hover:pl-2 transition-all cursor-pointer group">
                        <span class="text-[10px] text-gray-400 block">Luzon</span>
                        <span class="group-hover:vatican-red font-semibold">Archdiocese of Manila</span>
                    </li>
                    <li class="border-b border-gray-100 pb-2 hover:pl-2 transition-all cursor-pointer group">
                        <span class="text-[10px] text-gray-400 block">Visayas</span>
                        <span class="group-hover:vatican-red font-semibold">Archdiocese of Cebu</span>
                    </li>
                    <li class="border-b border-gray-100 pb-2 hover:pl-2 transition-all cursor-pointer group">
                        <span class="text-[10px] text-gray-400 block">Mindanao</span>
                        <span class="group-hover:vatican-red font-semibold">Archdiocese of Davao</span>
                    </li>
                </ul>

                <div class="mt-12 p-6 bg-[#2c2c2c] text-white">
                    <h4 class="serif text-xl border-b border-vatican mb-4 pb-2">Ecclesiastical Provinces</h4>
                    <p class="text-xs leading-relaxed text-gray-300">Browse parishes according to the hierarchical structure of the Catholic Church in the Philippines.</p>
                </div>
            </div>

        </div>
    </main>

    <footer class="mt-20 border-t-4 border-vatican bg-[#1a1a1a] py-16 px-6 shadow-2xl">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center md:items-start gap-12 text-white">
            
            <div class="flex items-center gap-8 md:w-1/2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Coat_of_arms_of_Leone_XIV.svg/960px-Coat_of_arms_of_Leone_XIV.svg.png" 
                     alt="Stemma di Leone XIV" 
                     class="h-32 w-auto">
                
                <div class="text-left border-l-2 border-vatican/30 pl-8">
                    <h4 class="serif text-2xl font-bold vatican-gold leading-tight tracking-wide">LEO XIV</h4>
                    <p class="text-[10px] uppercase tracking-[0.3em] text-gray-400 mt-1 font-bold">Pontifex Maximus</p>
                    <p class="italic text-sm text-white/90 mt-3 font-semibold decoration-1 underline-offset-4 border-b border-vatican inline-block pb-1">"In Illo Uno Unum"</p>
                    <p class="text-[10px] text-gray-500 mt-2 uppercase tracking-widest italic">Servus Servorum Dei</p>
                </div>
            </div>

            <div class="md:w-1/2 flex flex-col md:flex-row gap-12 justify-end w-full text-right">
                <div>
                    <h5 class="text-[11px] font-bold uppercase tracking-widest vatican-gold mb-4 border-b border-white/10 pb-2">The Holy See</h5>
                    <ul class="text-xs space-y-3 text-gray-300 font-medium tracking-wide">
                        <li class="hover:vatican-gold cursor-pointer transition-colors">The Magisterium</li>
                        <li class="hover:vatican-gold cursor-pointer transition-colors">Vatican News</li>
                        <li class="hover:vatican-gold cursor-pointer transition-colors">Apostolic Palace</li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-[11px] font-bold uppercase tracking-widest vatican-gold mb-4 border-b border-white/10 pb-2">Domus Dei PH</h5>
                    <ul class="text-xs space-y-3 text-gray-300 font-medium tracking-wide">
                        <li class="hover:vatican-gold cursor-pointer transition-colors">CBCP Online</li>
                        <li class="hover:vatican-gold cursor-pointer transition-colors">Diocesan Registry</li>
                        <li class="hover:vatican-gold cursor-pointer transition-colors">Legal & Privacy</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="max-w-6xl mx-auto mt-16 pt-8 border-t border-white/5 text-center">
            <p class="text-[9px] text-gray-500 uppercase tracking-[0.6em] font-bold">
                &copy; 2026 Domus Dei Philippines | Ad Limina Apostolorum
            </p>
        </div>
    </footer>

</body>
</html>