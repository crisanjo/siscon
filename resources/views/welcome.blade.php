@extends('layouts.main')
@section('title', 'SAI | Sistema de Avaliações Institucionais da Unilab')

@section('content')
<ul class="nav nav-pills">
    @if (!Route::has('home'))
        <li class="nav-item">
            <a href="<?= url('/') ?>" title="Ir para à página inicial" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                </svg>
                Página inicial
            </a>
        </li>
    @endif
    @if (Route::has('login'))
        @auth
            <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Área administrativa</a></li>
        @else
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
        @endauth
    @endif
</ul>
<h1 class="text-center">SAI</h1>
<p>
    <strong>O Sistema de Avaliações Institucionais</strong> tem como objetivo principal coletar, processar e analisar dados quantitativos e qualitativos para fornecer informações valiosas que auxiliem na tomada de decisões estratégicas e na melhoria contínua da Unilab.
</p>
<p>
    <strong>A avaliação institucional</strong> - prevista pelo Sistema Nacional de Avaliação da Educação Superior (SINAES) - tem por objetivo identificar o perfil da instituição e o significado de sua atuação, por meio de suas atividades, cursos, programas, projetos e setores (Lei n° 10.861/2004). Para o SINAES, as dimensões institucionais são:
</p>
<p>
    I - a missão e o plano de desenvolvimento institucional;
</p>
<p>
    II - a política para o ensino, a pesquisa, a pós-graduação, a extensão e as respectivas formas de operacionalização, incluídos os procedimentos para estímulo à produção acadêmica, as bolsas de pesquisa, de monitoria e demais modalidades;
</p>
<p>
    III - a responsabilidade social da instituição, considerada especialmente no que se refere à sua contribuição em relação à inclusão social, ao desenvolvimento econômico e social, à defesa do meio ambiente, da memória cultural, da produção artística e do patrimônio cultural;
</p>
<p>
    IV - a comunicação com a sociedade;
</p>
<p>
    V - as políticas de pessoal, as carreiras do corpo docente e do corpo técnico-administrativo, seu aperfeiçoamento, desenvolvimento profissional e suas condições de trabalho;
</p><p>
VI - organização e gestão da instituição, especialmente o funcionamento e representatividade dos colegiados, sua independência e autonomia na relação com a mantenedora, e a participação dos segmentos da comunidade universitária nos processos decisórios;
</p>
<p>
    VII - infraestrutura física, especialmente a de ensino e de pesquisa, biblioteca, recursos de informação e comunicação;
</p>
<p>
    VIII - planejamento e avaliação, especialmente os processos, resultados e eficácia da autoavaliação institucional;
</p>
<p>
    IX - políticas de atendimento aos estudantes;
</p>
<p>
    X - sustentabilidade financeira, tendo em vista o significado social da continuidade dos compromissos na oferta da educação superior.
</p>
@endsection
