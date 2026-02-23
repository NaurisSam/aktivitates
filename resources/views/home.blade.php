@extends('layouts.app')

<body>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                    </div>               
                    <div class="mb-3" style="margin-left: 12px; margin-right: 12px;">
                        <img src="https://www.radio1.lv/userfiles/news/sync/e87ac3a61d0fee874cbe5771587c9e73.jpg" alt="Skolas bilde" class="img-fluid rounded" style="height: 400px; object-fit: cover; width: 100%; display: block; border-radius: 12px;">
                    </div>

                    <h2 class="mb-4" style="color: #2c3e50; font-weight: 600; font-size: 1.8rem;">Informācija par skolu</h2>
                    <div class="p-4 mb-4" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); border-left: 4px solid #007bff; border-radius: 8px;">
                        <p class="text-justify" style="font-size: 1.3rem; color: #34495e; line-height: 1.8;">Varakļānu vidusskola darbojas izglītības jomā. Tās mērķis ir sniegt skolēniem zināšanas un prasmes, kā arī palīdzēt uzzināt vairāk arī citās sfērās izņemot tās ko māca skolā, to skola panāk ar pulciņiem un citām ārpus stundu nodarbībām.</p>
                    </div>

                    <h3 class="mt-5 mb-4" style="color: #2c3e50; font-weight: 600; font-size: 1.5rem;">Ārpusstundu aktivitātes</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3 mb-3" style="background: #f0f8ff; border-left: 4px solid #28a745; border-radius: 8px;">
                                <strong style="color: #28a745; font-size: 1.15rem;">Sporta pulciņi</strong>
                                <p style="margin: 8px 0 0 0; color: #34495e; font-size: 1.05rem;">Basketbols, volejbols, peldēšana un vieglatlētika</p>
                            </div>
                            <br>
                            <div class="p-3 mb-3" style="background: #fff8f0; border-left: 4px solid #fd7e14; border-radius: 8px;">
                                <strong style="color: #fd7e14; font-size: 1.15rem;">Mākslas un muzika</strong>
                                <p style="margin: 8px 0 0 0; color: #34495e; font-size: 1.05rem;">Deju grupa, kora klubs, teātris un glezniecības pulciņi</p>
                            </div>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 mb-3" style="background: #f0f4ff; border-left: 4px solid #007bff; border-radius: 8px;">
                                <strong style="color: #007bff; font-size: 1.15rem;">Zinātne un tehnika</strong>
                                <p style="margin: 8px 0 0 0; color: #34495e; font-size: 1.05rem;">Robotikas klubs, programmēšanas kursi un eksperimentālo zinātņu laboratorija</p>
                            </div>
                            <br>
                            <div class="p-3 mb-3" style="background: #f5f0ff; border-left: 4px solid #6f42c1; border-radius: 8px;">
                                <strong style="color: #6f42c1; font-size: 1.15rem;">Valodas</strong>
                                <p style="margin: 8px 0 0 0; color: #34495e; font-size: 1.05rem;">Angļu, vācu un franču valodas intensīvie kursi</p>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="p-3" style="background: #f0f8f8; border-left: 4px solid #17a2b8; border-radius: 8px;">
                        <strong style="color: #17a2b8; font-size: 1.15rem;">Sabiedrības aktivitātes</strong>
                        <p style="margin: 8px 0 0 0; color: #34495e; font-size: 1.05rem;">Ekoloģijas klubs, brīvprātīgo programma un skolēnu padome</p>
                    </div>
                    <br>
                    <div class="p-4 mt-4" style="background: #f0f8ff; border-radius: 8px;">
                        <p class="text-justify" style="font-size: 1.3rem; color: #34495e; line-height: 1.8;">Mūsu ārpusstundu programma nodrošina katra skolēna personīgu attīstību, palīdzējot atrast savus intereses un talantu. Caur šīm aktivitātēm skolēni labāk iemācās komandas darbu, kreatīvitāti un vadības prasmes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
