<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AcmeCorp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .placeholder-img {
        background-color: #ccc;
        width: 100%;
        height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        font-size: 18px;
        font-weight: bold;
    }

    .placeholder-img::before {
        content: "300x400";
    }
</style>

<body>

    <!-- Header -->
    <header class="sticky-top bg-light shadow-sm">
        <nav class="container navbar navbar-expand-md navbar-light">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <svg width="30" height="30" fill="currentColor" class="bi bi-building me-2" viewBox="0 0 16 16">
                    <path d="M1 13h14v2H1v-2zM8 1h6a1 1 0 0 1 1 1v11H1V2a1 1 0 0 1 1-1h6z" />
                </svg>
                <span class="fw-bold fs-5">AcmeCorp</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php" target="_blank">關於我們</a></li>
                    <li class="nav-item"><a class="nav-link" href="./login.php" target="_blank">登入</a></li>
                </ul>
                <a href="#" class="btn btn-primary ms-3">了解更多</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="py-5 text-center bg-light">
        <div class="container">
            <h1 class="display-4 fw-bold">創新科技 <span class="text-primary">引領未來</span></h1>
            <p class="lead">AcmeCorp 致力於通過先進技術解決方案，為全球客戶創造價值，推動產業變革。</p>
            <div class="mt-4">
                <a href="#services" class="btn btn-primary btn-lg me-2">了解我們的服務</a>
                <a href="#contact" class="btn btn-outline-primary btn-lg">聯繫我們</a>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <h4 class="text-primary fw-bold">20+</h4>
                    <p>年行業經驗</p>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary fw-bold">100+</h4>
                    <p>全球客戶</p>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary fw-bold">50+</h4>
                    <p>專利技術</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold">我們的服務</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">雲端解決方案</h5>
                            <p class="card-text">提供安全、可擴展的雲端服務，助力企業數字化轉型。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">網絡安全</h5>
                            <p class="card-text">全方位的網絡安全服務，保護您的業務免受現代威脅。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">人工智能</h5>
                            <p class="card-text">利用 AI 技術優化業務流程，提高效率和決策能力。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold">我們的團隊</h2>
            <p class="lead">由行業專家組成的團隊，致力於為您提供最佳解決方案。</p>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="" class="card-img-top placeholder-img" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">張三</h5>
                            <p class="card-text">首席執行官</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="" class="card-img-top placeholder-img" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">李四</h5>
                            <p class="card-text">技術總監</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="" class="card-img-top placeholder-img" alt="Team Member">
                        <div class="card-body">
                            <h5 class="card-title">王五</h5>
                            <p class="card-text">客戶服務主管</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <p>© 2024 AcmeCorp. 版權所有。</p>
            <a href="https://cleaners-webflow-template.webflow.io/" target="_blank" class="text-light me-3">模板一</a>
            <a href="https://legally-template.webflow.io/" target="_blank" class="text-light me-3">模板二</a>
            <a href="https://accruefy.webflow.io/" target="_blank" class="text-light me-3">模板三</a>
            <a href="https://empowerx.webflow.io/" target="_blank" class="text-light">模板四</a>
        </div>
    </footer>

</body>

</html>