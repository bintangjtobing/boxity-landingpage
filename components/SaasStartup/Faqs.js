import React from 'react';
import {
    Accordion,
    AccordionItem,
    AccordionItemButton,
    AccordionItemHeading,
    AccordionItemPanel,
} from 'react-accessible-accordion';

const Faqs = () => {
    return (
        <div className="faq-accordion">
            <h2>Frequently asked questions</h2>

            <Accordion allowZeroExpanded preExpanded={['a']}>
                <AccordionItem uuid="a">
                    <AccordionItemHeading>
                        <AccordionItemButton>
                            Do I need to give you payment info during my trial?
                        </AccordionItemButton>
                    </AccordionItemHeading>
                    <AccordionItemPanel>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida amet, consectetur adipiscing.</p>
                    </AccordionItemPanel>
                </AccordionItem>

                <AccordionItem uuid="b">
                    <AccordionItemHeading>
                        <AccordionItemButton>
                            Do I need to give you payment info during my trial?
                        </AccordionItemButton>
                    </AccordionItemHeading>
                    <AccordionItemPanel>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida amet, consectetur adipiscing.</p>
                    </AccordionItemPanel>
                </AccordionItem>

                <AccordionItem uuid="c">
                    <AccordionItemHeading>
                        <AccordionItemButton>
                            Can I upgrade my license?
                        </AccordionItemButton>
                    </AccordionItemHeading>
                    <AccordionItemPanel>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida amet, consectetur adipiscing.</p>
                    </AccordionItemPanel>
                </AccordionItem>
            </Accordion>
        </div>
    )
}

export default Faqs;