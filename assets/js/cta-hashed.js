
export default function renderPlan(plan) {
  const plans = [
    { id: 1, product_id: 3843, variations: { month: { id: 5546, cost: 199 }, annual: { id: 5763, cost: 1999 } } },
    { id: 2, product_id: 3843, variations: { month: { id: 5547, cost: 299 }, annual: { id: 5764, cost: 2999 } } },
    { id: 3, product_id: 3843, variations: { month: { id: 5548, cost: 399 }, annual: { id: 5765, cost: 3999 } } },
    { id: 4, product_id: 3843, variations: { month: { id: 5549, cost: 499 }, annual: { id: 5766, cost: 4999 } } },
    { id: 5, product_id: 3843, variations: { month: { id: 5550, cost: 599 }, annual: { id: 5767, cost: 5999 } } },
    { id: 6, product_id: 3843, variations: { month: { id: 5551, cost: 699 }, annual: { id: 5768, cost: 6999 } } },
    { id: 7, product_id: 3843, variations: { month: { id: 5552, cost: 799 }, annual: { id: 5769, cost: 7999 } } },
    { id: 8, product_id: 3843, variations: { month: { id: 5553, cost: 899 }, annual: { id: 5770, cost: 8999 } } },
    { id: 9, product_id: 3843, variations: { month: { id: 5554, cost: 999 }, annual: { id: 5771, cost: 9999 } } },
    { id: 10, product_id: 3843, variations: { month: { id: 7145, cost: '1,099' }, annual: { id: 7146, cost: '10,990' } } },
    { id: 11, product_id: 3843, variations: { month: { id: 7147, cost: '1,199' }, annual: { id: 7148, cost: '11,990' } } },
    { id: 12, product_id: 3843, variations: { month: { id: 7149, cost: '1,299' }, annual: { id: 7150, cost: '12,990' } } },
    { id: 13, product_id: 3843, variations: { month: { id: 7151, cost: '1,399' }, annual: { id: 7152, cost: '13,990' } } },
    { id: 14, product_id: 3843, variations: { month: { id: 7153, cost: '1,499' }, annual: { id: 7154, cost: '14,990' } } },
    { id: 99, product_id: 3843, variations: { month: { id: 6667, cost: 99 }, annual: { id: 6668, cost: 999 } } }
  ];

  // console.log('Plans: ', plans);



  let monthContainer = jQuery('#monthly');
  let annualContainer = jQuery('#annual');
  const errorContainer = jQuery('#error');
  const planContainer = jQuery('#plan-data');

  let costTemplate = (selectedPlan, type) => `<div id="${ type ? 'month' : 'annual' }-plan-${ plan }"><h5>$${ type ? selectedPlan.variations.month.cost : selectedPlan.variations.annual.cost }</h5><a href="https://growth10.com/cart/?add-to-cart=${ selectedPlan.product_id }&variation_id=${ type ? selectedPlan.variations.month.id : selectedPlan.variations.annual.id }" class="button button--teal active" role="link">Register here</a></div>`;

  // console.log('Url: ', plan);
  let selected = plans.find(x => x.id === plan);
  // console.log('Selected: ', selected);
  let index = plans.indexOf(selected);
  // console.log('Index: ', index);

  if (selected && (index >= 0)) {
    monthContainer.html(costTemplate(plans[index],true));
    annualContainer.html(costTemplate(plans[index],false));
  } else {
    errorContainer.show();
    planContainer.hide();
  }

}
