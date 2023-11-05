import{A as H}from"./AddonConditions.1b54da61.js";import"./default-i18n.3881921e.js";import"./constants.1758f66e.js";import{m as q}from"./links.23796d97.js";import{o as i,c as g,a as c,r,b as d,D as A,d as e,t as f,w as n,f as $,F as w,h as x,n as C,g as y}from"./vue.runtime.esm-bundler.b39e1078.js";import{_ as L}from"./_plugin-vue_export-helper.b97bdf23.js";/* empty css                                              */import{C as B}from"./Blur.8cc39c73.js";import{G as I,a as D}from"./Row.5242dafa.js";import{C as T}from"./Card.79fe964d.js";import{C as O}from"./Tooltip.6979830f.js";import{a as M,e as U}from"./index.0eabb636.js";import{S as V,a as N,b as P,c as G}from"./InternalOutbound.4ce419f7.js";import{U as j}from"./AnimatedNumber.b765a5ab.js";import{C as R}from"./DonutChartWithLegend.75733bae.js";import{u as Z,S as z}from"./SeoSiteScore.4c797f42.js";import"./Caret.164d8058.js";/* empty css                                            *//* empty css                                              */import{T as E,a as F}from"./Row.d3be1f0a.js";import{n as Q}from"./numbers.c7cb4085.js";import{R as W}from"./RequiredPlans.77523a56.js";import{C as J}from"./Index.f7bbb33f.js";import"./addons.afbe11a7.js";import"./upperFirst.8df5cd57.js";import"./_stringToArray.4de3b1f3.js";import"./toString.0891eb3e.js";import"./isArrayLikeObject.22a096cb.js";import"./Slide.cdf6c622.js";import"./license.df046522.js";const K={};function X(t,o){return i(),g("div")}const Y=L(K,[["render",X]]),tt={},nt={viewBox:"0 0 19 17",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"aioseo-link-orphaned"},st=c("path",{d:"M13.875 3.87495H10.375V5.53745H13.875C15.3713 5.53745 16.5875 6.7537 16.5875 8.24995C16.5875 9.5012 15.73 10.5512 14.5663 10.8575L15.8438 12.135C17.27 11.4087 18.25 9.9562 18.25 8.24995C18.25 5.83495 16.29 3.87495 13.875 3.87495ZM13 7.37495H11.0838L12.8338 9.12495H13V7.37495ZM0.75 1.4862L3.47125 4.20745C2.66729 4.53457 1.97904 5.09383 1.49435 5.81385C1.00966 6.53387 0.750518 7.38199 0.75 8.24995C0.75 10.665 2.71 12.625 5.125 12.625H8.625V10.9625H5.125C3.62875 10.9625 2.4125 9.7462 2.4125 8.24995C2.4125 6.8587 3.47125 5.71245 4.8275 5.5637L6.63875 7.37495H6V9.12495H8.38875L10.375 11.1112V12.625H11.8888L15.3975 16.125L16.5 15.0225L1.86125 0.374954L0.75 1.4862Z",fill:"currentColor"},null,-1),et=[st];function ot(t,o){return i(),g("svg",nt,et)}const it=L(tt,[["render",ot]]);const rt={components:{CoreTooltip:O,SvgCircleQuestionMark:M,SvgLinkAffiliate:V,SvgLinkExternal:N,SvgLinkInternalInbound:P,SvgLinkOrphaned:it,SvgSearch:U,UtilAnimatedNumber:j},props:{type:{type:String,required:!0},count:{type:Number,required:!0}},data(){return{strings:{orphanedPostsDescription:this.$t.__("Orphaned posts are posts that have no inbound internal links yet and may be more difficult to find by search engines.",this.$td)},icons:[{type:"posts",name:this.$t.__("Posts Crawled",this.$td),icon:"svg-search"},{type:"external",name:this.$t.__("External Links",this.$td),icon:"svg-link-external"},{type:"internal",name:this.$t.__("Internal Links",this.$td),icon:"svg-link-internal-inbound"},{type:"affiliate",name:this.$t.__("Affiliate Links",this.$td),icon:"svg-link-affiliate"},{type:"orphaned",name:this.$t.__("Orphaned Posts",this.$td),icon:"svg-link-orphaned"}]}},computed:{getType(){return this.icons.find(t=>t.type===this.type)},getLink(){switch(this.type){case"posts":case"affiliate":case"internal":return"#/links-report?fullReport=1";case"external":return"#/domains-report";case"orphaned":return"#/links-report?orphaned-posts=1";default:return""}}}},at=["href"],lt={class:"aioseo-link-count-top"},ct={class:"aioseo-link-count-bottom"},ut={class:"disabled-button gray"};function _t(t,o,s,k,a,u){const _=r("util-animated-number"),l=r("svg-circle-question-mark"),p=r("core-tooltip");return i(),g("a",{class:"aioseo-link-count",href:u.getLink},[c("div",lt,[(i(),d(A(u.getType.icon))),e(_,{number:parseInt(s.count)},null,8,["number"])]),c("div",ct,[c("span",null,f(u.getType.name),1),s.type==="orphaned"?(i(),d(p,{key:0},{tooltip:n(()=>[c("span",null,f(a.strings.orphanedPostsDescription),1)]),default:n(()=>[c("div",ut,[e(l)])]),_:1})):$("",!0)])],8,at)}const dt=L(rt,[["render",_t]]);const pt={components:{CoreCard:T,GridColumn:I,GridRow:D,LinkCount:dt},props:{totals:{type:Object,required:!0}}};function mt(t,o,s,k,a,u){const _=r("LinkCount"),l=r("grid-column"),p=r("grid-row"),b=r("core-card");return i(),d(b,{class:"aioseo-link-assistant-statistics",slug:"internalLinksOverviewCounter",toggles:!1,"no-slide":"","hide-header":""},{default:n(()=>[e(p,null,{default:n(()=>[e(l,{class:"counter divider-right",oneFifth:""},{default:n(()=>[e(_,{type:"posts",count:s.totals.crawledPosts},null,8,["count"])]),_:1}),e(l,{class:"counter divider-right",oneFifth:""},{default:n(()=>[e(_,{type:"orphaned",count:s.totals.orphanedPosts},null,8,["count"])]),_:1}),e(l,{class:"counter divider-right",oneFifth:""},{default:n(()=>[e(_,{type:"external",count:s.totals.externalLinks},null,8,["count"])]),_:1}),e(l,{class:"counter divider-right",oneFifth:""},{default:n(()=>[e(_,{type:"internal",count:s.totals.internalLinks},null,8,["count"])]),_:1}),e(l,{class:"counter",oneFifth:""},{default:n(()=>[e(_,{type:"affiliate",count:s.totals.affiliateLinks},null,8,["count"])]),_:1})]),_:1})]),_:1})}const ht=L(pt,[["render",mt]]),ft={setup(){const{strings:t}=Z();return{composableStrings:t}},components:{CoreCard:T,CoreDonutChartWithLegend:R},mixins:[z],props:{totals:{type:Object,required:!0}},data(){return{score:0,strings:q(this.composableStrings,{header:this.$t.__("Internal vs External vs Affiliate Links",this.$td),totalLinks:this.$t.__("Total Links",this.$td),linksReportLink:this.$t.sprintf('<a href="%1$s">%2$s</a><a href="%1$s"> <span>&rarr;</span></a>',"#/links-report?fullReport=1",this.$t.__("See a Full Links Report",this.$td))})}},computed:{parts(){return[{slug:"external",name:this.$t.__("External Links",this.$td),count:this.totals.externalLinks},{slug:"affiliate",name:this.$t.__("Affiliate Links",this.$td),count:this.totals.affiliateLinks},{slug:"internal",name:this.$t.__("Internal Links",this.$td),count:this.totals.internalLinks}]},sortedParts(){const t=this.parts;return t.sort(function(o,s){return s.count>o.count?1:-1}),t[0].ratio=100,t[1].ratio=t[1].count/this.totals.totalLinks*100,t[2].ratio=t[2].count/this.totals.totalLinks*100,t.forEach(o=>{switch(o.slug){case"external":{o.color="#005AE0";break}case"internal":{o.color="#00AA63";break}case"affiliate":{o.color="#F18200";break}}}),t.filter(function(o){return o.count!==0}),t.forEach((o,s)=>(s===0||t.forEach((k,a)=>(s<a&&(o.ratio=o.ratio+k.ratio),o)),o)),t}}};function kt(t,o,s,k,a,u){const _=r("core-donut-chart-with-legend"),l=r("core-card");return i(),d(l,{class:"aioseo-link-assistant-link-ratio",slug:"linkAssistantLinkRatio","no-slide":"","header-text":a.strings.header},{default:n(()=>[e(_,{parts:u.sortedParts,total:s.totals.totalLinks,label:a.strings.totalLinks,link:a.strings.linksReportLink},null,8,["parts","total","label","link"])]),_:1},8,["header-text"])}const gt=L(ft,[["render",kt]]);const $t={components:{CoreCard:T,CoreTooltip:O,SvgLinkInternalInbound:P,SvgLinkInternalOutbound:G,TableColumn:E,TableRow:F},props:{linkingOpportunities:{type:Array,required:!0}},data(){return{strings:{linkingOpportunities:this.$t.__("Linking Opportunities",this.$td),noResults:this.$t.__("No items found.",this.$td)},link:this.$t.sprintf('<a class="links-report-link" href="%1$s">%2$s</a><a href="%1$s"> <span>&rarr;</span></a>',"#/links-report?linkingOpportunities=1",this.$t.__("See All Linking Opportunities",this.$td))}},computed:{columns(){return[{slug:"post-title",label:this.$t.__("Post Title",this.$td)},{slug:"internal-inbound",label:this.$t.sprintf(this.$t.__("%1$sInbound Internal Links%2$sLinks from other posts to this post",this.$td),"<strong>","</strong><br />"),tooltipIcon:"svg-link-internal-inbound"},{slug:"internal-outbound",label:this.$t.sprintf(this.$t.__("%1$sOutbound Internal Links%2$sLinks from this post to other posts",this.$td),"<strong>","</strong><br />"),tooltipIcon:"svg-link-internal-outbound"}]}}},Lt={class:"linking-opportunities-table"},bt={class:"row"},vt={key:0},yt={key:1,class:"aioseo-tooltip-wrapper"},wt=["innerHTML"],xt={class:"row"},Ct=["href"],Tt=["href"],Ot={class:"count"},St={class:"count"},At={key:0,class:"links-report-link"},It=["innerHTML"];function Dt(t,o,s,k,a,u){const _=r("core-tooltip"),l=r("table-column"),p=r("table-row"),b=r("core-card");return i(),d(b,{class:"aioseo-link-assistant-linking-opportunities",slug:"linkAssistantLinkOpportunities","no-slide":"","header-text":a.strings.linkingOpportunities},{default:n(()=>[c("div",null,[c("div",Lt,[s.linkingOpportunities.length?(i(),d(p,{key:0,class:"header-row"},{default:n(()=>[(i(!0),g(w,null,x(u.columns,(m,h)=>(i(),d(l,{key:h,class:C(m.slug)},{default:n(()=>[c("div",bt,[m.tooltipIcon?$("",!0):(i(),g("div",vt,f(m.label),1)),m.tooltipIcon?(i(),g("div",yt,[e(_,{class:"action"},{tooltip:n(()=>[c("span",{innerHTML:m.label},null,8,wt)]),default:n(()=>[(i(),d(A(m.tooltipIcon)))]),_:2},1024)])):$("",!0)])]),_:2},1032,["class"]))),128))]),_:1})):$("",!0),(i(!0),g(w,null,x(s.linkingOpportunities,(m,h)=>(i(),d(p,{key:h,class:C(["row",{even:h%2===0}])},{default:n(()=>[e(l,{class:"post-title"},{default:n(()=>[c("div",xt,[e(_,{type:"action"},{tooltip:n(()=>[c("a",{class:"tooltip-url",href:m.permalink,target:"_blank"},f(m.postTitle),9,Tt)]),default:n(()=>[c("a",{href:`#/links-report?postTitle=${m.postTitle}`},f(m.postTitle),9,Ct)]),_:2},1024)])]),_:2},1024),e(l,{class:"internal-inbound"},{default:n(()=>[c("span",Ot,f(m.suggestionsInbound),1)]),_:2},1024),e(l,{class:"internal-outbound"},{default:n(()=>[c("span",St,f(m.suggestionsOutbound),1)]),_:2},1024)]),_:2},1032,["class"]))),128)),s.linkingOpportunities.length?$("",!0):(i(),d(p,{key:1,class:"row even"},{default:n(()=>[e(l,{class:"post-title"},{default:n(()=>[y(f(a.strings.noResults),1)]),_:1})]),_:1}))]),s.linkingOpportunities.length?(i(),g("div",At,[c("span",{innerHTML:a.link},null,8,It)])):$("",!0)])]),_:1},8,["header-text"])}const Pt=L($t,[["render",Dt]]);const Rt={components:{CoreCard:T,CoreTooltip:O,CoreDonutChartWithLegend:R,TableColumn:E,TableRow:F},props:{totals:{type:Object,required:!0},mostLinkedDomains:{type:Array,required:!0}},data(){return{numbers:Q,strings:{mostLinkedDomains:this.$t.__("Most Linked to Domains",this.$td),totalExternalLinks:this.$t.__("Total External Links",this.$td),noResults:this.$t.__("No items found.",this.$td),link:this.$t.sprintf('<a href="%1$s">%2$s</a><a href="%1$s"> <span>&rarr;</span></a>',"#/domains-report?fullReport=1",this.$t.__("See a Full Domains Report",this.$td))}}},computed:{sortedParts(){const t=this.mostLinkedDomains.map(s=>s).splice(0,3);let o=this.totals.externalLinks;return t[0]&&(t[0].color="#005AE0",t[0].ratio=100,o=o-t[0].count),t[1]&&(t[1].color="#80ACF0",t[1].ratio=t[1].count/this.totals.externalLinks*100,o=o-t[1].count),t[2]&&(t[2].color="#BFD6F7",t[2].ratio=t[2].count/this.totals.externalLinks*100,o=o-t[2].count),o&&t.push({name:this.$t.__("other domains",this.$td),color:"#E8E8EB",count:o,ratio:o/this.totals.externalLinks*100,last:!0}),t.filter(function(s){return s.count!==0}).sort(function(s,k){return parseInt(k.count)>parseInt(s.count)?1:-1}),t.forEach((s,k)=>(k===0||t.forEach((a,u)=>(k<u&&(s.ratio=s.ratio+a.ratio),s)),s)),t},columns(){return[{slug:"name",label:this.$t.__("Domain",this.$td)},{slug:"count",label:this.$t.__("# of Links",this.$td)}]}}},Et={class:"domains-table"},Ft={class:"row"},Ht=["src"],qt=["href"],Bt=["href"];function Mt(t,o,s,k,a,u){const _=r("core-donut-chart-with-legend"),l=r("table-column"),p=r("table-row"),b=r("core-tooltip"),m=r("core-card");return i(),d(m,{class:"aioseo-link-assistant-linked-domains",slug:"linkAssistantLinkedDomains","no-slide":"","header-text":a.strings.mostLinkedDomains},{default:n(()=>[e(_,{parts:u.sortedParts,total:s.totals.externalLinks,label:a.strings.totalExternalLinks,link:a.strings.link},null,8,["parts","total","label","link"]),c("div",Et,[e(p,{class:"header-row"},{default:n(()=>[(i(!0),g(w,null,x(u.columns,(h,v)=>(i(),d(l,{key:v,class:C(h.slug)},{default:n(()=>[y(f(h.label),1)]),_:2},1032,["class"]))),128))]),_:1}),(i(!0),g(w,null,x(s.mostLinkedDomains,(h,v)=>(i(),d(p,{key:v,class:C(["row",{even:v%2===0}])},{default:n(()=>[e(l,{class:"domain"},{default:n(()=>[c("div",Ft,[c("img",{alt:"Domain Favicon",class:"favicon",src:`https://www.google.com/s2/favicons?sz=32&domain=${h.name}`},null,8,Ht),e(b,{type:"action"},{tooltip:n(()=>[c("a",{class:"tooltip-url",href:`https://${h.name}`,target:"_blank"},f(h.name),9,Bt)]),default:n(()=>[c("a",{class:"domain-name",href:`#/domains-report?hostname=${h.name}`},f(h.name),9,qt)]),_:2},1024)])]),_:2},1024),e(l,{class:"count"},{default:n(()=>[c("span",null,f(a.numbers.numberFormat(h.count)),1)]),_:2},1024)]),_:2},1032,["class"]))),128)),s.mostLinkedDomains.length?$("",!0):(i(),d(p,{key:0,class:"row even"},{default:n(()=>[e(l,{class:"domain"},{default:n(()=>[y(f(a.strings.noResults),1)]),_:1})]),_:1}))])]),_:1},8,["header-text"])}const Ut=L(Rt,[["render",Mt]]),Vt={components:{CoreBlur:B,GridColumn:I,GridRow:D,LinkCounts:ht,LinkRatio:gt,LinkingOpportunities:Pt,MostLinkedDomains:Ut},props:{showTotals:{type:Boolean,default(){return!0}}},computed:{totals(){return{crawledPosts:102,externalLinks:753,internalLinks:56,affiliateLinks:175,orphanedPosts:78,totalLinks:753+56+175}},linkingOpportunities(){return[{postTitle:"Test Post Title 1",postId:"123",suggestionsInbound:"2",suggestionsOutbound:"13"},{postTitle:"Test Post Title 2",postId:"124",suggestionsInbound:"2",suggestionsOutbound:"13"},{postTitle:"Test Post Title 3",postId:"125",suggestionsInbound:"2",suggestionsOutbound:"13"},{postTitle:"Test Post Title 4",postId:"126",suggestionsInbound:"2",suggestionsOutbound:"13"},{postTitle:"Test Post Title 5",postId:"127",suggestionsInbound:"2",suggestionsOutbound:"13"}]},mostLinkedDomains(){return[{name:"aioseo.com",count:100},{name:"wpbeginner.com",count:99},{name:"wpforms.com",count:50},{name:"optinmonster.com",count:40},{name:"monsterinsights.com",count:30},{name:"smashballoon.com",count:20},{name:"exactmetrics.com",count:10},{name:"seedprod.com",count:5},{name:"awesomemotive.com",count:4},{name:"easydigitaldownloads.com",count:3}]}}};function Nt(t,o,s,k,a,u){const _=r("link-counts"),l=r("grid-column"),p=r("grid-row"),b=r("link-ratio"),m=r("linking-opportunities"),h=r("most-linked-domains"),v=r("core-blur");return i(),d(v,null,{default:n(()=>[s.showTotals?(i(),d(p,{key:0,class:"overview-link-count"},{default:n(()=>[e(l,null,{default:n(()=>[e(_,{totals:u.totals},null,8,["totals"])]),_:1})]),_:1})):$("",!0),e(p,null,{default:n(()=>[e(l,{md:"6"},{default:n(()=>[e(b,{totals:u.totals},null,8,["totals"]),e(m,{"linking-opportunities":u.linkingOpportunities},null,8,["linking-opportunities"])]),_:1}),e(l,{md:"6"},{default:n(()=>[e(h,{totals:u.totals,"most-linked-domains":u.mostLinkedDomains},null,8,["totals","most-linked-domains"])]),_:1})]),_:1})]),_:1})}const Gt=L(Vt,[["render",Nt]]),jt={components:{Blur:Gt,RequiredPlans:W,Cta:J},data(){return{strings:{ctaButtonText:this.$t.sprintf(this.$t.__("Upgrade to %1$s and Unlock Link Assistant",this.$td),"Pro"),ctaHeader:this.$t.sprintf(this.$t.__("Link Assistant is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),linkAssistantDescription:this.$t.__("Get relevant suggestions for adding internal links to all your content as well as finding any orphaned posts that have no internal links.",this.$td),linkOpportunities:this.$t.__("Actionable Link Suggestions",this.$td),orphanedPosts:this.$t.__("See Orphaned Posts",this.$td),affiliateLinks:this.$t.__("See Affiliate Links",this.$td),domainReports:this.$t.__("Top Domain Reports",this.$td)}}}},Zt={class:"aioseo-link-assistant-overview"};function zt(t,o,s,k,a,u){const _=r("blur"),l=r("required-plans"),p=r("cta");return i(),g("div",Zt,[e(_),e(p,{class:"aioseo-link-assistant-cta","cta-link":t.$links.getPricingUrl("link-assistant","link-assistant-upsell","overview"),"button-text":a.strings.ctaButtonText,"learn-more-link":t.$links.getUpsellUrl("link-assistant","overview","home"),"feature-list":[a.strings.linkOpportunities,a.strings.domainReports,a.strings.orphanedPosts,a.strings.affiliateLinks],"align-top":""},{"header-text":n(()=>[y(f(a.strings.ctaHeader),1)]),description:n(()=>[e(l,{addon:"aioseo-link-assistant"}),y(" "+f(a.strings.linkAssistantDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list"])])}const S=L(jt,[["render",zt]]),Qt={mixins:[H],components:{Cta:Y,Lite:S,Overview:S},data(){return{addonSlug:"aioseo-link-assistant"}}},Wt={class:"aioseo-link-assistant-overview"};function Jt(t,o,s,k,a,u){const _=r("overview",!0),l=r("cta"),p=r("lite");return i(),g("div",Wt,[t.shouldShowMain?(i(),d(_,{key:0})):$("",!0),t.shouldShowUpdate||t.shouldShowActivate?(i(),d(l,{key:1})):$("",!0),t.shouldShowLite?(i(),d(p,{key:2})):$("",!0)])}const On=L(Qt,[["render",Jt]]);export{On as default};
