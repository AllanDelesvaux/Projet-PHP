<?php if( !isset($_SESSION['isAdmin']) ||   !$_SESSION['isAdmin'])
{
    $msgErreur = 'Vous n\'avez pas les droits pour accéder à cette page';
    Vue::montrer('VuePage/pageErreur', array('msgErreur' => $msgErreur));
} else {
    echo '

            <di><h1> Bienvenue'.$_SESSION[''].'
            <div class ="flex flex-row items-center justify-center">    
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">Card title!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">Card title!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="flex flex-row items-center justify-center">  
                <div class="card w-96 bg-base-100 shadow-xl">
                    <div class="card-body">
                        <h2 class="card-title">Card title!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>';
}
?>