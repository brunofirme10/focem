<template>
    <div class="interna evento-interna">
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
                                <h3>Agora é só garantir sua vaga, clique no botão abaixo.</h3>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x align-center">
                            <div class="cell text-center">
                                <button @click.prevent="viewForm" class="button button-primary button-inline"> Preencher fomulário </button>
                            </div>
                        </div>
                        <div class="grid-x grid-margin-x event-form">
                            <div class="cell">
                                <form action="" @submit.prevent="submit">
                                    <fieldset class="fieldset">
                                        <legend for="personal">Informações pessoais</legend>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.user.name" 
                                                        placeholder="Nome completo" 
                                                        :class="[{ 'error' : errors.has('user.name') }]"
                                                        v-validate="'required|min:5'" 
                                                        data-vv-name="user.name" 
                                                        required
                                                    />
                                                    <label>Seu nome</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.user.email" 
                                                        placeholder="Email" 
                                                        :class="[{ 'error' : errors.has('user.email') }]"
                                                        v-validate="'required|email'" 
                                                        data-vv-name="user.email" 
                                                        required
                                                    />
                                                    <label>Coloque seu melhor email</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input type="number" 
                                                        v-model="form.user.phone" 
                                                        placeholder="Telefone" 
                                                        :class="[{ 'error' : errors.has('user.phone') }]"
                                                        v-validate="'required|min:8'" 
                                                        data-vv-name="user.phone" 
                                                        required
                                                    />
                                                    <label>Telefone</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.user.cpf" 
                                                        placeholder="CPF" 
                                                        v-mask="'###.###.###-##'" 
                                                        :class="[{ 'error' : errors.has('user.cpf') }]"
                                                        v-validate="'required|min:14'" 
                                                        data-vv-name="user.cpf"
                                                        required
                                                    />
                                                    <label>CPF</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="date" 
                                                        v-model="form.user.birthday" 
                                                        placeholder="Data de nascimento" 
                                                        :class="[{ 'error' : errors.has('user.birthday') }]"
                                                        v-validate="'required|min:8'" 
                                                        data-vv-name="user.birthday"
                                                        pattern="\d{1,2}/\d{1,2}/\d{4}"
                                                        required
                                                    />
                                                    <label>Data de nascimento</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="fieldset">
                                        <legend>Dados da empresa</legend>
                                        <div class="grid-x grid-margin-x">
                                            
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        placeholder="Nome da empresa" 
                                                        v-model="form.company.name" 
                                                        :class="[{ 'error' : errors.has('company.name') }]"
                                                        v-validate="'required'" 
                                                        data-vv-name="company.name"
                                                        required
                                                    />
                                                    <label>Nome da empresa</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        placeholder="CNPJ" 
                                                        v-model="form.company.cnpj" 
                                                        v-mask="'##.###.###/####-##'" 
                                                        :class="[{ 'error' : errors.has('company.cnpj') }]"
                                                        v-validate="'required|min:18'" 
                                                        data-vv-name="company.cnpj"
                                                        required
                                                    />
                                                    <label>CNPJ</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.company.cep" 
                                                        placeholder="CEP" 
                                                        :class="[{ 'error' : errors.has('company.cep') }]"
                                                        v-mask="'#####-###'" 
                                                        v-validate="'required|min:9'" 
                                                        data-vv-name="company.cep"
                                                        required
                                                    />
                                                    <label>CEP</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.company.cnae" 
                                                        placeholder="CNAE" 
                                                        :class="[{ 'error' : errors.has('company.cnae') }]"
                                                        v-validate="'required|min:9'" 
                                                        data-vv-name="company.cnae"
                                                        v-mask="'####-#/##'"
                                                        required
                                                    />
                                                    <label>CNAE</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.company.address" 
                                                        placeholder="Endereço" 
                                                        :class="[{ 'error' : errors.has('company.address') }]"
                                                        v-validate="'required|min:4'" 
                                                        data-vv-name="company.address"
                                                        required
                                                    />
                                                    <label>Endereço</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input  
                                                        type="text" 
                                                        v-model="form.company.site" 
                                                        placeholder="Website" 
                                                        v-validate="'required|url'" 
                                                        data-vv-name="company.site" 
                                                        :class="[{ 'error': errors.has('company.site')}]"
                                                        required
                                                    />
                                                    <label>Website</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <select 
                                                        v-model="form.company.annual_billing" 
                                                        v-validate="'required'" 
                                                        data-vv-name="company.annual_billing" 
                                                        :class="[{ 'error': errors.has('company.annual_billing')}]"
                                                        required>
                                                        <option value="">Seleciona uma opção</option>
                                                        <option value="Até R$ 81 mil">Até R$ 81 mil</option>
                                                        <option value="De R$ 81 mil a R$ 360 mil">De R$ 81 mil a R$ 360 mil</option>
                                                        <option value="De R$ 360 mil a R$ 4,8 milhões">De R$ 360 mil a R$ 4,8 milhões</option>
                                                        <option value="De R$ 4,8 milhões a R$ 35 milhões">De R$ 4,8 milhões a R$ 35 milhões</option>
                                                        <option value="Acima de R$ 35 milhões">Acima de R$ 35 milhões</option>
                                                    </select>
                                                    <label>Faturamento anual da sua empresa</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="cell">
                                                <div class="input-group">
                                                    <textarea 
                                                        v-model="form.company_info.products_to_sell" 
                                                        v-validate="'required|min:10|max:450'" 
                                                        data-vv-name="company_info.products_to_sell" 
                                                        :class="[{ 'error': errors.has('company_info.products_to_sell')}]"
                                                        cols="30" rows="6" required></textarea>
                                                    <label>Principais produtos e serviços que a empresa tem interesse em vender:</label>
                                                </div>
                                                <small>10 à 450 caracteres</small>
                                            </div>
                                            <div class="cell">
                                                <div class="input-group">
                                                    <textarea 
                                                        v-model="form.company_info.certifications" 
                                                        v-validate="'required|min:10|max:450'" 
                                                        data-vv-name="company_info.certifications" 
                                                        :class="[{ 'error': errors.has('company_info.certifications')}]"
                                                        cols="30" rows="6" required></textarea>
                                                    <label> Certificações, prêmios e licença ambiental (ISO 9000, ISO 14000, MPE BRASIL, PGQP, ETC)</label>
                                                </div>
                                                <small>10 à 450 caracteres</small>
                                            </div>
                                            <div class="cell">
                                                <div class="input-group">
                                                    <textarea 
                                                        v-model="form.company_info.clients" 
                                                        v-validate="'required|min:10|max:450'" 
                                                        data-vv-name="company_info.clients" 
                                                        :class="[{ 'error': errors.has('company_info.clients')}]"
                                                        cols="30" rows="6" required></textarea>
                                                    <label>Maquinário e capacidade de fornecimento (detalhamento das máquinas, perfil e capacidade de produção, etc.)</label>
                                                </div>
                                                <small>10 à 450 caracteres</small>
                                            </div>
                                            <div class="cell">
                                                <div class="input-group">
                                                    <textarea 
                                                        v-model="form.company_info.machinery" 
                                                        v-validate="'required|min:10|max:450'" 
                                                        data-vv-name="company_info.clients" 
                                                        :class="[{ 'error': errors.has('company_info.clients')}]"
                                                        cols="30" rows="6" required></textarea>
                                                    <label>Principais clientes atendidos</label>
                                                </div>
                                                <small>10 à 450 caracteres</small>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="fieldset">
                                        <legend for="personal">Informações para depósito de diárias</legend>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.bank.name" 
                                                        placeholder="Banco" 
                                                        v-validate="'required|min:3'" 
                                                        data-vv-name="bank.name" 
                                                        :class="[{ 'error': errors.has('bank.name')}]"
                                                        required
                                                    />
                                                    <label>Banco</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.bank.agency" 
                                                        placeholder="Agência" 
                                                        v-validate="'required|min:3'" 
                                                        data-vv-name="bank.agency" 
                                                        :class="[{ 'error': errors.has('bank.agency')}]"
                                                        required
                                                    />
                                                    <label>Agência</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input 
                                                        type="text" 
                                                        v-model="form.bank.account" 
                                                        placeholder="Conta corrente" 
                                                        v-validate="'required|min:3'" 
                                                        data-vv-name="bank.account" 
                                                        :class="[{ 'error': errors.has('bank.account')}]"
                                                        required
                                                    />
                                                    <label>Conta corrente</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset class="fieldset">
                                        <legend for="personal">Informações para emissão de passagens aéreas</legend>
                                        <small>Tenha em conta que as passagens serão emitidas levando em consideração o tempo de duração, horários e empresas que ofereçam as condições mais vantajosas para a ABDI.</small>
                                        <div class="grid-x grid-margin-x m-t-1">
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input v-model="form.dates.go" type="date" required>
                                                    <label>Sugestão de data e horário de ida</label>
                                                </div>
                                            </div>
                                            <div class="large-6 cell">
                                                <div class="input-group">
                                                    <input v-model="form.dates.back" type="date" required>
                                                    <label>Sugestão de data e horário de volta:</label>
                                                </div>
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
            },
            action: 'save'
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
        viewForm() {
            $('.event-form').addClass('open')
        },
        async submit() {
            if(!await this.$validator.validate()) 
                return;
            
            this.axios.post('app.php', this.form)
        }
    },
}
</script>
<style lang="scss" scoped>
.event-form {
    height: 0;
    overflow: hidden;
    transition: 2s all;
    &.open {
        height: 100%;
    }
}
</style>

