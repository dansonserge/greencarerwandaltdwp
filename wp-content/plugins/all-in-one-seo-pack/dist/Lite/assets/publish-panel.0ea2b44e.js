import{_ as h}from"./js/_plugin-vue_export-helper.b97bdf23.js";import{r as f,o as n,c as a,a as r,F as k,h as C,b as A,n as v,D as T,g as S,t as u,d as m,f as _,w as q,G as J}from"./js/vue.runtime.esm-bundler.b39e1078.js";import{l as Y}from"./js/index.cfe09a50.js";import{l as Q}from"./js/index.0eabb636.js";import{l as X}from"./js/index.0b123ab1.js";import{e as ee,i as te,d as se,b as R,r as oe,l as M,u as re}from"./js/links.23796d97.js";import{a as ie}from"./js/allowed.2026f6fd.js";import{S as ne,c as ae,e as ce}from"./js/Caret.164d8058.js";/* empty css                                               *//* empty css                                                 */import"./js/default-i18n.3881921e.js";import"./js/constants.1758f66e.js";import{S as le}from"./js/Exclamation.2f8bed1f.js";import{a as de}from"./js/Image.af03f96e.js";import{T as ue}from"./js/Tags.49706f1a.js";/* empty css                                                 */import{C as pe}from"./js/GoogleSearchPreview.104cd74f.js";import{S as he}from"./js/External.8186427a.js";import{s as _e}from"./js/postContent.dbf3451c.js";import{l as me}from"./js/loadTruSeo.fe530b3f.js";import{e as ge}from"./js/elemLoaded.9a6eb745.js";import{t as O}from"./js/toString.0891eb3e.js";import{u as fe}from"./js/upperFirst.8df5cd57.js";import{d as ve}from"./js/cleanForSlug.383040f4.js";import"./js/translations.6e7b2383.js";import"./js/isArrayLikeObject.22a096cb.js";import"./js/tags.1952ae10.js";import"./js/html.e224f763.js";import"./js/get.ebf1fee6.js";import"./js/_stringToArray.4de3b1f3.js";import"./js/_baseTrim.8725856f.js";function Se(e){return fe(O(e).toLowerCase())}function be(e,t,s,o){var i=-1,c=e==null?0:e.length;for(o&&c&&(s=e[++i]);++i<c;)s=t(s,e[i],i,e);return s}var ye=/[^\x00-\x2f\x3a-\x40\x5b-\x60\x7b-\x7f]+/g;function Pe(e){return e.match(ye)||[]}var xe=/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/;function $e(e){return xe.test(e)}var I="\\ud800-\\udfff",we="\\u0300-\\u036f",Ee="\\ufe20-\\ufe2f",ke="\\u20d0-\\u20ff",Ce=we+Ee+ke,L="\\u2700-\\u27bf",U="a-z\\xdf-\\xf6\\xf8-\\xff",Ae="\\xac\\xb1\\xd7\\xf7",Te="\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\xbf",Re="\\u2000-\\u206f",Me=" \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000",V="A-Z\\xc0-\\xd6\\xd8-\\xde",Oe="\\ufe0e\\ufe0f",z=Ae+Te+Re+Me,D="['’]",b="["+z+"]",Ie="["+Ce+"]",B="\\d+",Le="["+L+"]",N="["+U+"]",F="[^"+I+z+B+L+U+V+"]",Ue="\\ud83c[\\udffb-\\udfff]",Ve="(?:"+Ie+"|"+Ue+")",ze="[^"+I+"]",W="(?:\\ud83c[\\udde6-\\uddff]){2}",Z="[\\ud800-\\udbff][\\udc00-\\udfff]",p="["+V+"]",De="\\u200d",y="(?:"+N+"|"+F+")",Be="(?:"+p+"|"+F+")",P="(?:"+D+"(?:d|ll|m|re|s|t|ve))?",x="(?:"+D+"(?:D|LL|M|RE|S|T|VE))?",G=Ve+"?",K="["+Oe+"]?",Ne="(?:"+De+"(?:"+[ze,W,Z].join("|")+")"+K+G+")*",Fe="\\d*(?:1st|2nd|3rd|(?![123])\\dth)(?=\\b|[A-Z_])",We="\\d*(?:1ST|2ND|3RD|(?![123])\\dTH)(?=\\b|[a-z_])",Ze=K+G+Ne,Ge="(?:"+[Le,W,Z].join("|")+")"+Ze,Ke=RegExp([p+"?"+N+"+"+P+"(?="+[b,p,"$"].join("|")+")",Be+"+"+x+"(?="+[b,p+y,"$"].join("|")+")",p+"?"+y+"+"+P,p+"+"+x,We,Fe,B,Ge].join("|"),"g");function je(e){return e.match(Ke)||[]}function He(e,t,s){return e=O(e),t=s?void 0:t,t===void 0?$e(e)?je(e):Pe(e):e.match(t)||[]}var qe="['’]",Je=RegExp(qe,"g");function Ye(e){return function(t){return be(He(ve(t).replace(Je,"")),e,"")}}var Qe=Ye(function(e,t,s){return t=t.toLowerCase(),e+(s?Se(t):t)});const $=Qe;const Xe={setup(){return{optionsStore:ee(),postEditorStore:te(),settingsStore:se(),tagsStore:R()}},mixins:[ue,de],components:{CoreGoogleSearchPreview:pe,SvgCircleCheck:ne,SvgCircleClose:ae,SvgCircleExclamation:le,SvgExternal:he,SvgPencil:ce},data(){return{allowed:ie,separator:void 0,socialImage:null,socialImageKey:0,strings:{snippetPreview:this.$t.__("Snippet Preview",this.$td),canonicalUrl:this.$t.__("Canonical URL",this.$td)}}},computed:{tips(){let e=[{label:this.$t.__("Visibility",this.$td),name:"visibility",access:"aioseo_page_advanced_settings"},{label:this.$t.__("SEO Analysis",this.$td),name:"seoAnalysis",access:"aioseo_page_analysis"},{label:this.$t.__("Readability",this.$td),name:"readabilityAnalysis",access:"aioseo_page_analysis"},{label:this.$t.__("Focus Keyphrase",this.$td),name:"focusKeyphrase",access:"aioseo_page_analysis"},{label:this.$t.__("Social",this.$td),name:"social",access:"aioseo_page_social_settings"}].filter(t=>this.allowed(t.access)&&(t.access!=="aioseo_page_analysis"||this.optionsStore.options.advanced.truSeo));return!this.optionsStore.options.social.facebook.general.enable&&!this.optionsStore.options.social.twitter.general.enable&&(e=e.filter(t=>t.name!=="social")),e.forEach((t,s)=>{e[s]={...t,...this.getData(t.name)}}),e},canImprove(){return this.tips.some(e=>e.type==="error")}},methods:{getIcon(e){switch(e){case"error":return"svg-circle-close";case"warning":return"svg-circle-exclamation";case"success":default:return"svg-circle-check"}},getData(e){const t={};if(e==="visibility"&&(t.value=this.$t.__("Good!",this.$td),t.type="success",(this.postEditorStore.currentPost.default?this.optionsStore.dynamicOptions.searchAppearance.postTypes[this.postEditorStore.currentPost.postType]&&!this.optionsStore.dynamicOptions.searchAppearance.postTypes[this.postEditorStore.currentPost.postType].advanced.robotsMeta.default&&this.optionsStore.dynamicOptions.searchAppearance.postTypes[this.postEditorStore.currentPost.postType].advanced.robotsMeta.noindex:this.postEditorStore.currentPost.noindex)&&(t.value=this.$t.__("Blocked!",this.$td),t.type="error")),e==="seoAnalysis"){t.value=this.$t.__("N/A",this.$td),t.type="error";const s=this.postEditorStore.currentPost.seo_score;Number.isInteger(s)&&(t.value=s+"/100",t.type=80<s?"success":50<s?"warning":"error")}if(e==="readabilityAnalysis"){t.value=this.$t.__("Good!",this.$td),t.type="success";const s=this.postEditorStore.currentPost.page_analysis.analysis.readability.errors;s&&0<s&&(t.value=this.$t.sprintf(this.$t._n("%1$s error found!","%1$s errors found!",s,this.$td),s),t.type="error")}if(e==="focusKeyphrase"){t.value=this.$t.__("No focus keyphrase!",this.$td),t.type="error";const s=this.postEditorStore.currentPost.keyphrases.focus;s&&s.keyphrase&&(t.value=s.score+"/100",t.type=80<s.score?"success":50<s.score?"warning":"error")}if(e==="social"){t.value=this.$t.__("Good!",this.$td),t.type="success",this.socialImageKey;const s=this.parseTags(this.postEditorStore.currentPost.og_title||this.postEditorStore.currentPost.title||this.postEditorStore.currentPost.tags.title).trim(),o=this.parseTags(this.postEditorStore.currentPost.og_description||this.postEditorStore.currentPost.description||this.postEditorStore.currentPost.tags.description).trim(),i=this.socialImage;(!s||!o||!i)&&(t.value=this.$t.__("Missing social markup!",this.$td),t.type="error")}return{...t,icon:this.getIcon(t.type)}},openSidebar(e){const{closePublishSidebar:t,openGeneralSidebar:s}=window.wp.data.dispatch("core/edit-post");t(),s("aioseo-post-settings-sidebar/aioseo-post-settings-sidebar");const o={};switch(e){case"canonical":case"visibility":o.tab="advanced";break;case"seoAnalysis":o.tab="general",o.card="basicseo";break;case"readabilityAnalysis":o.tab="general",o.card="readability";break;case"focusKeyphrase":o.tab="general",o.card="focus";break;case"social":o.tab="social";break}this.settingsStore.changeTabSettings({setting:"mainSidebar",value:o})}},async mounted(){await this.setImageUrl().then(()=>{this.socialImage=this.imageUrl}),window.aioseoBus.$on("updateSocialImagePreview",e=>{this.socialImage=e.image,this.socialImageKey++}),this.$nextTick(()=>{const e=document.querySelector(".aioseo-pre-publish .editor-post-publish-panel__link");e&&(e.innerHTML=this.canImprove?this.$t.__("Your post needs improvement!",this.$td):this.$t.__("You're good to go!",this.$td))})}},et={key:0,class:"seo-overview"},tt={class:"pre-publish-checklist"},st={class:"icon"},ot=["onClick"],rt={key:0,class:"snippet-preview"},it={class:"title"},nt=["href"],at={key:1,class:"canonical-url"},ct={class:"title"},lt=["href"];function dt(e,t,s,o,i,c){const l=f("svg-pencil"),g=f("core-google-search-preview"),j=f("svg-external");return o.postEditorStore.currentPost.id?(n(),a("div",et,[r("ul",tt,[(n(!0),a(k,null,C(c.tips,(d,H)=>(n(),a("li",{key:H},[r("span",st,[(n(),A(T(d.icon),{class:v(d.type)},null,8,["class"]))]),r("span",null,[S(u(d.label)+": ",1),r("span",{class:v(["result",d.value.endsWith("/100")?d.type:null])},u(d.value),3)]),o.optionsStore.dynamicOptions.searchAppearance.postTypes[o.postEditorStore.currentPost.postType]&&o.optionsStore.dynamicOptions.searchAppearance.postTypes[o.postEditorStore.currentPost.postType].advanced.showMetaBox?(n(),a("span",{key:0,class:"edit",onClick:jt=>c.openSidebar(d.name)},[m(l)],8,ot)):_("",!0)]))),128))]),i.allowed("aioseo_page_analysis")?(n(),a("div",rt,[r("p",it,u(i.strings.snippetPreview)+":",1),m(g,{title:e.parseTags(o.postEditorStore.currentPost.title||o.postEditorStore.currentPost.tags.title||"#post_title #separator_sa #site_title"),separator:o.optionsStore.options.searchAppearance.global.separator,description:e.parseTags(o.postEditorStore.currentPost.description||o.postEditorStore.currentPost.tags.description||"#post_content"),class:v({ismobile:o.postEditorStore.currentPost.generalMobilePrev})},{domain:q(()=>[r("a",{href:o.tagsStore.liveTags.permalink,target:"_blank"},u(o.tagsStore.liveTags.permalink),9,nt)]),_:1},8,["title","separator","description","class"])])):_("",!0),i.allowed("aioseo_page_analysis")&&o.postEditorStore.currentPost.canonicalUrl?(n(),a("div",at,[r("p",ct,[S(u(i.strings.canonicalUrl)+": ",1),r("span",{class:"edit",onClick:t[0]||(t[0]=d=>c.openSidebar("canonical"))},[m(l)])]),r("a",{href:o.postEditorStore.currentPost.canonicalUrl,target:"_blank",rel:"noopener noreferrer"},[r("span",null,u(o.postEditorStore.currentPost.canonicalUrl),1),m(j)],8,lt)])):_("",!0)])):_("",!0)}const w=h(Xe,[["render",dt]]),ut={},pt={width:"32",height:"32",fill:"none",class:"aioseo-facebook-rounded",xmlns:"http://www.w3.org/2000/svg"},ht=r("circle",{cx:"16",cy:"16",r:"16",fill:"currentColor"},null,-1),_t=r("path",{d:"M24 16c0-4.4-3.6-8-8-8s-8 3.6-8 8c0 4 2.9 7.3 6.7 7.9v-5.6h-2V16h2v-1.8c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V16h2.2l-.4 2.3h-1.9V24c4-.6 6.9-4 6.9-8z",fill:"#fff"},null,-1),mt=[ht,_t];function gt(e,t){return n(),a("svg",pt,mt)}const ft=h(ut,[["render",gt]]),vt={},St={width:"32",height:"32",fill:"none",class:"aioseo-linkedin-rounded",xmlns:"http://www.w3.org/2000/svg"},bt=r("circle",{cx:"16",cy:"16",r:"16",fill:"currentColor"},null,-1),yt=r("path",{d:"M11.6 24H8.2V13.3h3.4V24zM9.9 11.8C8.8 11.8 8 11 8 9.9 8 8.8 8.9 8 9.9 8c1.1 0 1.9.8 1.9 1.9 0 1.1-.8 1.9-1.9 1.9zM24 24h-3.4v-5.8c0-1.7-.7-2.2-1.7-2.2s-2 .8-2 2.3V24h-3.4V13.3h3.2v1.5c.3-.7 1.5-1.8 3.2-1.8 1.9 0 3.9 1.1 3.9 4.4V24h.2z",fill:"#fff"},null,-1),Pt=[bt,yt];function xt(e,t){return n(),a("svg",St,Pt)}const $t=h(vt,[["render",xt]]),wt={},Et={width:"32",height:"32",fill:"none",class:"aioseo-pinterest-rounded",xmlns:"http://www.w3.org/2000/svg"},kt=r("circle",{cx:"16",cy:"16",r:"16",fill:"currentColor"},null,-1),Ct=r("path",{d:"M16.056 6.583c-5.312 0-9.658 4.346-9.658 9.658a9.581 9.581 0 005.795 8.813c0-.724 0-1.448.12-2.173.242-.845 1.207-5.312 1.207-5.312s-.362-.604-.362-1.57c0-1.448.846-2.535 1.811-2.535.845 0 1.328.604 1.328 1.45 0 .844-.603 2.172-.845 3.38-.241.965.483 1.81 1.57 1.81 1.81 0 3.018-2.293 3.018-5.19 0-2.174-1.449-3.743-3.984-3.743-2.898 0-4.709 2.173-4.709 4.587 0 .845.242 1.449.604 1.932.12.241.242.241.12.483 0 .12-.12.603-.24.724-.121.242-.242.362-.483.242-1.329-.604-1.932-2.053-1.932-3.743 0-2.777 2.294-6.036 6.881-6.036 3.743 0 6.157 2.656 6.157 5.553 0 3.743-2.052 6.64-5.19 6.64-1.087 0-2.053-.603-2.415-1.207 0 0-.604 2.173-.725 2.656a10.702 10.702 0 01-.966 2.052c.846.242 1.811.363 2.777.363 5.312 0 9.658-4.347 9.658-9.659.121-4.829-4.225-9.175-9.537-9.175z",fill:"#fff"},null,-1),At=[kt,Ct];function Tt(e,t){return n(),a("svg",Et,At)}const Rt=h(wt,[["render",Tt]]),Mt={},Ot={width:"32",height:"32",fill:"none",class:"aioseo-twitter-rounded",xmlns:"http://www.w3.org/2000/svg"},It=r("circle",{cx:"16",cy:"16",r:"16",fill:"currentColor"},null,-1),Lt=r("path",{d:"M24 11c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-2.1 0-3.7 2-3.2 4-2.7-.1-5.1-1.4-6.8-3.4-.9 1.5-.4 3.4 1 4.4-.5 0-1-.2-1.5-.4 0 1.5 1.1 2.9 2.6 3.3-.5.1-1 .2-1.5.1.4 1.3 1.6 2.3 3.1 2.3-1.2.9-3 1.4-4.7 1.2 1.5.9 3.2 1.5 5 1.5 6.1 0 9.5-5.1 9.3-9.8.7-.4 1.3-1 1.7-1.7z",fill:"#fff"},null,-1),Ut=[It,Lt];function Vt(e,t){return n(),a("svg",Ot,Ut)}const zt=h(Mt,[["render",Vt]]);const Dt={setup(){return{tagsStore:R()}},components:{SvgFacebookRounded:ft,SvgLinkedinRounded:$t,SvgPinterestRounded:Rt,SvgTwitterRounded:zt},data(){return{strings:{title:this.$t.__("Get out the word!",this.$td),description:this.$t.__("Share your content on your favorite social media platforms to drive engagement and increase your SEO.",this.$td)}}},computed:{socialNetworks(){return[{icon:"svg-twitter-rounded",link:"https://twitter.com/share?url="},{icon:"svg-facebook-rounded",link:"https://www.facebook.com/sharer/sharer.php?u="},{icon:"svg-pinterest-rounded",link:"https://pinterest.com/pin/create/button/?url="},{icon:"svg-linkedin-rounded",link:"https://www.linkedin.com/shareArticle?url="}].map(e=>({...e,link:e.link+this.tagsStore.liveTags.permalink}))}}},Bt={key:0,class:"aioseo-post-publish"},Nt={class:"title"},Ft={class:"description"},Wt={class:"links"},Zt=["href"];function Gt(e,t,s,o,i,c){return o.tagsStore.liveTags.permalink?(n(),a("div",Bt,[r("h2",Nt,u(i.strings.title),1),r("p",Ft,u(i.strings.description),1),r("div",Wt,[(n(!0),a(k,null,C(c.socialNetworks,(l,g)=>(n(),a("a",{class:"link",target:"_blank",key:g,href:l.link},[(n(),A(T(l.icon)))],8,Zt))),128))])])):_("",!0)}const Kt=h(Dt,[["render",Gt]]);(function(e){if(!oe()||!_e()||!e.editPost.PluginDocumentSettingPanel)return;const t=e.editPost.PluginDocumentSettingPanel,s=e.editPost.PluginPrePublishPanel,o=e.editPost.PluginPostPublishPanel,i=e.plugins.registerPlugin;M();const l=re().aioseo.user;!l.capabilities.aioseo_page_analysis&&!l.capabilities.aioseo_page_general_settings&&!l.capabilities.aioseo_page_advanced_settings||i("aioseo-publish-panel",{render:()=>e.element.createElement(e.element.Fragment,{},e.element.createElement(t,{title:"AIOSEO",className:"aioseo-document-setting aioseo-seo-overview",icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-document-setting"}))),e.element.createElement(s,{title:["AIOSEO",":",e.element.createElement("span",{key:"scoreDescription",className:"editor-post-publish-panel__link"})],className:"aioseo-pre-publish aioseo-seo-overview",initialOpen:!0,icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-pre-publish"}))),e.element.createElement(o,{title:"AIOSEO",initialOpen:!0,icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-post-publish"}))))})})(window.wp);const E=e=>{let t=J({...e.component,name:"Standalone/PublishPanel"});return t=Y(t),t=Q(t),t=X(t),M(t),t.mount("#"+e.id),window.addEventListener("load",()=>{me(t,!1)}),t};window.aioseo.currentPost&&window.aioseo.currentPost.context==="post"&&[{id:"aioseo-pre-publish",component:w},{id:"aioseo-document-setting",component:w},{id:"aioseo-post-publish",component:Kt}].forEach(t=>{document.getElementById(t.id)?E(t):(ge("#"+t.id,$(t.id)),document.addEventListener("animationstart",function(s){$(t.id)===s.animationName&&E(t)},{passive:!0}))});
