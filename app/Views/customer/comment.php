<?= $this->extend('customer/template/index') ?>

<?= $this->section('content') ?>
<style>
    .stars {
        display: flex;
        flex-direction: row-reverse;
        justify-content: left;
    }

    .stars input {
        display: none;
    }

    .stars label {
        cursor: pointer;
        width: 1em;
        font-size: 2rem;
        color: #968f8f;
        transition: color 0.3s;
    }

    .stars input:checked~label {
        color: #FFD700;
    }

    .stars input:not(:checked)~label:hover,
    .stars input:not(:checked)~label:hover~label {
        color: #FFD700;
    }
</style>
<div class="col-lg-8 pb-5">
    <div class="card">
        <div class="card-header">
            <a href="/customer/history" class="btn btn-sm btn-info">Back</a>
        </div>
        <div class="card-body">
            <div class="text-center mb-3">
                <img src="/img/mitra/<?= $order[0]['photo']; ?>" alt="" width="300">
            </div>
            <div class="text-center mb-2">
                <span class="badge text-bg-primary"><?= $order[0]['price']; ?></span>
            </div>
            <div class="text-center">
                <h4><?= $order[0]['name_service']; ?></h4>
            </div>
            <div class="text-center mb-3">
                <p><?= $order[0]['description']; ?></p>
            </div>

            <hr class="my-3">

            <div>
                <form action="/customer/history/comment/<?= $order[0]['order_id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="stars">
                        <input type="radio" name="star" id="star-5" value="5" required><label for="star-5">★</label>
                        <input type="radio" name="star" id="star-4" value="4" required><label for="star-4">★</label>
                        <input type="radio" name="star" id="star-3" value="3" required><label for="star-3">★</label>
                        <input type="radio" name="star" id="star-2" value="2" required><label for="star-2">★</label>
                        <input type="radio" name="star" id="star-1" value="1" required><label for="star-1">★</label>
                    </div>
                    <h3 class="fw-bold fs-6">Write Comment</h3>
                    <div class="mb-3">
                        <textarea name="comment" class="form-control" rows="3" required></textarea>
                    </div>
                    <button class="btn btn-sm btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>