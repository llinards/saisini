<meta name="author" content="{{ config('app.name') }}">
<meta name="locale" content="{{ app()->getLocale() }}">
<meta name="description"
      content="slmedia.lv - Saīsiniet saites un ģenerējiet QR kodus ātri un viegli! Mūsu rīks nodrošina saīsinātas URL saites un pielāgojamus QR kodus, kas palīdz uzlabot jūsu saišu dalīšanos un sekošanu tiešsaistē.">
<meta property="og:description"
      content="slmedia.lv - Saīsiniet saites un ģenerējiet QR kodus ātri un viegli! Mūsu rīks nodrošina saīsinātas URL saites un pielāgojamus QR kodus, kas palīdz uzlabot jūsu saišu dalīšanos un sekošanu tiešsaistē."/>
<meta property="og:url" content=" {{Request::url()}}"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="{{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name')}}"/>

<meta property="og:image" content="{{ asset('storage/logo.png') }}"/>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "saisini.lv - Garso URL saīsinātājs un QR kodu Ģenerators",
      "url": "https://saisini.lv",
      "description": "Saīsiniet saites un ģenerējiet QR kodus ātri un viegli! Mūsu rīks nodrošina saīsinātas URL saites un pielāgojamus QR kodus, kas palīdz uzlabot jūsu saišu dalīšanos un sekošanu tiešsaistē.",
      "creator": {
        "@type": "Organization",
        "name": "S&L Media SIA"
      },
    }
</script>
