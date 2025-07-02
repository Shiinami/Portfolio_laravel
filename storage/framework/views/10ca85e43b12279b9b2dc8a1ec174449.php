<?php $__env->startSection('content'); ?>
    <!-- Tambahkan link CSS AOS jika belum ada di layout.sidebar -->
    <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">

    <section id="portfolio-details" class="portfolio-details section">
        <?php if($selectedItem): ?>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper init-swiper">

                            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="<?php echo e(asset('storage/' . $selectedItem->image)); ?>" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info" data-aos="fade-left" data-aos-delay="200">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: <?php echo e($selectedItem->category); ?></li>
                                <li><strong>Client</strong>: <?php echo e($selectedItem->client); ?></li>
                                <li><strong>Project date</strong>: <?php echo e($selectedItem->date); ?></li>
                                <li><strong>Project URL</strong>: <a href="<?php echo e($selectedItem->link); ?>"> <?php echo e($selectedItem->link); ?></a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                            <h2><?php echo e($selectedItem->title); ?></h2>
                            <p>
                                <?php echo e($selectedItem->description); ?>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="container">
                <div class="alert alert-warning mt-5" data-aos="fade-in">
                    Portfolio item tidak ditemukan.
                </div>
            </div>
        <?php endif; ?>
    </section>
    <!-- /Portfolio Details Section -->

    <!-- Tambahkan script JS AOS -->
    <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\devam\Documents\GitHub\Portfolio_laravel\resources\views/layout/portfolio.blade.php ENDPATH**/ ?>