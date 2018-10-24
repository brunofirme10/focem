<template>
    <div class="interna">
        <cover img="auto/evento/cover-header.jpg"/>
        <section class="interna">
            <div class="grid-container">
                <div class="grid-x grid-margin-x align-center">
                    <div class="large-8 cell" v-show="!_.isEmpty(event)">
                        <div class="grid-x grid-margin-x align-center p-b-1">
                            <div class="large-8 cell text-center">
                                <h2> {{ event.title }} </h2>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center p-b-1">
                            <div class="cell event-info">
                                <span>
                                    <v-icon name="map-marker-alt"/>
                                    {{ event.local }}
                                </span>
                                <span>
                                    <v-icon name="calendar"/>
                                    {{ event.date }}
                                </span>
                                <span>
                                    <v-icon name="clock"/>
                                    {{ event.time }}
                                </span>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell">
                                <p> {{ event.description }}</p>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell" v-html="event.map"/>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell text-center">
                                <h3>Agora é só garantir sua vaga, preenchendo o formuário abaixo:</h3>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x">
                            <div class="cell">
                                <form action="" @submit.prevent="submit">
                                    <fieldset class="fieldset">
                                        <legend for="personal">Informações pessoais</legend>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Seu nome">
                                            </div>
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Coloque seu melhor email">
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Telefone">
                                            </div>
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="CPF">
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Data de nascimento">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="fieldset">
                                        <legend for="">Dados da empresa</legend>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Nome da empresa">
                                            </div>
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="CNPJ">
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="CEP">
                                            </div>
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="CNAE">
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Site">
                                            </div>
                                            <div class="large-6 cell">
                                                <select name="" id="">
                                                    <option value="Até R$ 81 mil">Até R$ 81 mil</option>
                                                    <option value="De R$ 81 mil a R$ 360 mil">De R$ 81 mil a R$ 360 mil</option>
                                                    <option value="De R$ 360 mil a R$ 4,8 milhões">De R$ 360 mil a R$ 4,8 milhões</option>
                                                    <option value="De R$ 4,8 milhões a R$ 35 milhões">De R$ 4,8 milhões a R$ 35 milhões</option>
                                                    <option value="Acima de R$ 35 milhões">Acima de R$ 35 milhões</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="cell">
                                                <label for="">Principais produtos e serviços que a empresa tem interesse em vender:</label>
                                                <textarea name="" cols="30" rows="6"></textarea>
                                                <small>*máximo 450 caracteres ou 5 linhas</small>
                                            </div>
                                            <div class="cell">
                                                <label for="">
                                                    Certificações, prêmios e licença ambiental (ISO 9000, ISO 14000, MPE BRASIL, PGQP, ETC):
                                                </label>
                                                <textarea name="" cols="30" rows="6"></textarea>
                                                <small>*máximo 450 caracteres ou 5 linhas</small>
                                            </div>
                                            <div class="cell">
                                                <label for="">Maquinário e capacidade de fornecimento (detalhamento das máquinas, perfil e capacidade de produção, etc.):</label>
                                                <textarea name="" cols="30" rows="6"></textarea>
                                                <small>*máximo 450 caracteres ou 5 linhas</small>
                                            </div>
                                            <div class="cell">
                                                <label for="">Principais clientes atendidos:</label>
                                                <textarea name="" cols="30" rows="6"></textarea>
                                                <label for="">*máximo 450 caracteres ou 5 linhas</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="fieldset">
                                        <legend for="personal">Informações para depósito de diárias</legend>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Banco">
                                            </div>
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Agência">
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <input type="text" placeholder="Conta corrente">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="fieldset">
                                        <legend for="personal">Informações para emissão de passagens aéreas</legend>
                                        <small> Tenha em conta que as passagens serão emitidas levando em consideração o tempo de duração, horários e empresas que ofereçam as condições mais vantajosas para a ABDI.</small>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <label for="">Sugestão de data e horário de ida</label>
                                                <input type="text">
                                            </div>
                                            <div class="large-6 cell">
                                                <label for="">Sugestão de data e horário de volta:</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="grid-x grid-margin-x">
                                        <div class="cell text-right">
                                            <button class="button button-primary button-inline" type="submit"> INSCREVER </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div v-show="_.isEmpty(event)">
                        <h1> Evento não encontrado </h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import api from '@/api/pt_br'
export default {
    data: (self) => ({
        category: self.$route.matched[0].path.replace('/', ''),
        form: {
            user: {
                name: '',
                email: '',
                phone: '',
                cpf: '',
                birthday: '',
            },
            company: {
                name: '',
                address: '',
                cnpj: '',
                cep: '',
                cnae: '',
                site: '',
                annual_billing: ''
            },
            company_info: {
                products_to_sell: '',
                certifications: '',
                clients: '',
                machinery: '',
            },
            bank: {
                name: '',
                agency: '',
                account: '',
            },
            dates: {
                go: '',
                back: '',
            }
        }
    }),
    computed: {
        event() {
            return api.events.find(e =>
                        (e.id == this.$route.params.id || e.slug == this.$route.params.id)
                        && e.category == this.category) || {}
        },
        _() {
            return _
        }
    },
    methods: {
        submit() {
            this.axios.post('app.php', this.form)
        }
    },
}
</script>

