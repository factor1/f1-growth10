
export default function renderPlan(plan) {
  const plans = [
    { id:1, product_id: 3843, variations: { month: { id: 5546, cost: 199 }, annual: { id: 'id', cost: 1999 } } },
    { id:2, product_id: 3843, variations: { month: { id: 5547, cost: 299 }, annual: { id: 'id', cost: 2999 } } },
    { id:3, product_id: 3843, variations: { month: { id: 5548, cost: 399 }, annual: { id: 'id', cost: 3999 } } },
    { id:4, product_id: 3843, variations: { month: { id: 5549, cost: 499 }, annual: { id: 'id', cost: 4999 } } },
    { id:5, product_id: 3843, variations: { month: { id: 5550, cost: 599 }, annual: { id: 'id', cost: 5999 } } },
    { id:6, product_id: 3843, variations: { month: { id: 5551, cost: 699 }, annual: { id: 'id', cost: 6999 } } },
    { id:7, product_id: 3843, variations: { month: { id: 5552, cost: 799 }, annual: { id: 'id', cost: 7999 } } },
    { id:8, product_id: 3843, variations: { month: { id: 5553, cost: 899 }, annual: { id: 'id', cost: 8999 } } },
    { id:9, product_id: 3843, variations: { month: { id: 5554, cost: 999 }, annual: { id: 'id', cost: 9999 } } }
  ];

  let monthContainer = jQuery('#monthly');
  let annualContainer = jQuery('#annual');
  const errorContainer = jQuery('#error');
  const planContainer = jQuery('#plan-data');

  let costTemplate = (selectedPlan, type) => `<div id="${ type ? 'month' : 'annual' }-plan-${ plan }"><h5>$${ type ? selectedPlan.variations.month.cost : selectedPlan.variations.annual.cost }</h5><a href="https://growth10.com/cart/?add-to-cart=${ selectedPlan.product_id }&variation_id=${ type ? selectedPlan.variations.month.id : selectedPlan.variations.annual.id }" class="button button--teal active" role="link">Register here</a></div>`;

  if ((plan >= 0) && (plan < 9)) {
    console.log(costTemplate(plans[plan], true));
    monthContainer.html(costTemplate(plans[plan],true));
    annualContainer.html(costTemplate(plans[plan],false));
  } else {
    errorContainer.show();
    planContainer.hide();
  }

}
