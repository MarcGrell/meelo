<style>
    .stepprocessbar {
        display: flex;
        justify-content: center;
        margin: 30px 0;
    }

    .steps-horizontal {
        display: flex;
        justify-content: space-between;
        width: 100%;
        max-width: 800px;
        position: relative;
    }

    /* Forbindende linje */
    .steps-horizontal::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 4px;
        background-color: #ddd;
        z-index: -1;
        transform: translateY(-50%);
    }

    .step-horizontal {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        text-align: center;
    }

    .step-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        border: 4px solid #ddd;
        transition: 0.3s;
    }

    .step-title {
        margin-top: 8px;
        font-size: 14px;
        color: #777;
    }

    /* Style for completed steps */
    .step-horizontal.complete .step-icon {
        border-color: #ff8800;
        background: #ff8800;
        color: #fff;
    }

    /* Style for active step */
    .step-horizontal.active .step-icon {
        border-color: #ff8800;
        background: #fff;
        color: #ff8800;
        font-size: 24px;
    }

    .step-horizontal.complete .step-title,
    .step-horizontal.active .step-title {
        color: #ff8800;
        font-weight: bold;
    }

    /* Mobilvenlig */
    @media (max-width: 600px) {
        .steps-horizontal {
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }
        .step-horizontal {
            flex: none;
            width: 30%;
        }
    }
</style>

<div class="stepprocessbar">
    <div class="steps-horizontal">
        <div class="step-horizontal complete">
            <div class="step-icon">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="step-title">Afhentning</div>
        </div>
        <div class="step-horizontal active">
            <div class="step-icon">
                <i class="fa-regular fa-circle-dot"></i>
            </div>
            <div class="step-title">Kagetype</div>
        </div>
        <div class="step-horizontal">
            <div class="step-icon">
                <i class="fa-regular fa-circle-dot"></i>
            </div>
            <div class="step-title">Tilføjelser</div>
        </div>
        <div class="step-horizontal">
            <div class="step-icon">
                <i class="fa-regular fa-circle-dot"></i>
            </div>
            <div class="step-title">Oplysninger</div>
        </div>
        <div class="step-horizontal">
            <div class="step-icon">
                <i class="fa-regular fa-circle-dot"></i>
            </div>
            <div class="step-title">Gennemse</div>
        </div>
        <div class="step-horizontal">
            <div class="step-icon">
                <i class="fa-regular fa-circle-dot"></i>
            </div>
            <div class="step-title">Bekræftelse</div>
        </div>
    </div>
</div>
